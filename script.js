// Fetch cars data
fetch("data/cars.json")
  .then((response) => response.json())
  .catch((error) => console.error("Error fetching data:", error));

const filterForm = document.getElementById("filter-form");
const carGrid = document.querySelector(".car-grid");

function renderCars(cars) {
  if (!cars.length) return;

  const fragment = document.createDocumentFragment();
  cars.forEach((car) => {
    const carCard = document.createElement("div");
    carCard.className = "car-card";
    carCard.id = `car-${cars.indexOf(car)}`; // Set the ID based on the index
    carCard.innerHTML = `
            <img src="${car.image}" alt="${car.make} ${car.model}">
            <div class="card-content">
                <h3>${car.make} ${car.model}</h3>
                <p>Year: ${car.year}</p>
                <p>Price: $${car.price}/day</p>
                <button class="book-button">Book Now</button>
            </div>
        `;
    fragment.appendChild(carCard);
  });
  carGrid.appendChild(fragment);

  // Add event listener for booking button
  carGrid.querySelectorAll(".book-button").forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault();
      console.log(
        "Booking clicked for:",
        this.closest(".card-content").querySelector("h3").textContent
      );

      const carDetails = {
        make: this.closest(".card-content").querySelector("h3").textContent,
        model: this.closest(".card-content")
          .querySelector("p:nth-child(2)")
          .textContent.split(":")[1]
          .trim(),
        year: this.closest(".card-content")
          .querySelector("p:nth-child(3)")
          .textContent.split(":")[1]
          .trim(),
        price: this.closest(".card-content")
          .querySelector("p:nth-child(3)")
          .textContent.split(":")[1]
          .split("/")[0],
      };

      console.log("Redirecting to booking.php with params:", carDetails);

      setTimeout(() => {
        window.location.href = `booking.php?make=${encodeURIComponent(
          carDetails.make
        )}&model=${encodeURIComponent(
          carDetails.model
        )}&year=${encodeURIComponent(
          carDetails.year
        )}&price=${encodeURIComponent(carDetails.price)}`;
      }, 100); // Add a 100ms delay
    });
  });
}

// Initial render
fetch("data/cars.json")
  .then((response) => response.json())
  .then((data) => renderCars(data));

// Filter functionality
filterForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const make = document.getElementById("make").value;
  const model = document.getElementById("model").value;
  const year = document.getElementById("year").value;

  fetch("data/cars.json")
    .then((response) => response.json())
    .then((data) => {
      const filteredData = data.filter((car) => {
        return (
          (!make || car.make.toLowerCase().includes(make.toLowerCase())) &&
          (!model || car.model.toLowerCase().includes(model.toLowerCase())) &&
          (!year || parseInt(year) <= parseInt(car.year))
        );
      });
      renderCars(filteredData);
    })
    .catch((error) => console.error("Error fetching filtered data:", error));
});

// Mobile menu toggle
const menuBtn = document.querySelector(".menu-btn");
const navList = document.querySelector(".nav-list");

menuBtn.addEventListener("click", () => {
  navList.classList.toggle("active");
  menuBtn.classList.toggle("open");

  if (navList.classList.contains("active")) {
    navList.style.maxHeight = `${navList.scrollHeight}px`;
  } else {
    navList.style.maxHeight = null;
  }
});

// Function to navigate to About Us page
function navigateToAboutUs() {
  window.location.href = "about-us.php";
}

// Add this event listener to your existing code
document.querySelector(".nav-list").addEventListener("click", function (e) {
  if (e.target.tagName === "A") {
    e.preventDefault();
    if (e.target.textContent === "About Us") {
      navigateToAboutUs();
    }
  }
});
