<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amari Rentals - Book Your Dream Ride Today!</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">AMARI RENTALS</div>
            <ul class="nav-list">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#cars">Cars</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
            <button class="menu-btn"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="hero">
                <h1>Welcome to Amari Rentals</h1>
                <p>Explore our wide range of cars and book your dream ride today!</p>
                <button class="explore-btn">Explore Cars</button>
            </div>
        </section>

        <section id="cars">
            <form id="filter-form">
                <h2>Filter Cars</h2>
                <div class="filter-group">
                    <input type="text" id="make" placeholder="Make">
                    <input type="text" id="model" placeholder="Model">
                    <input type="number" id="year" placeholder="Year">
                    <button type="submit">Filter</button>
                </div>
            </form>

            <div class="car-grid">
                <?php
                $cars = [
                    ["make" => "Toyota", "model" => "Corolla", "year" => 2019, "price" => 30, "image" => "toyota-corolla.jpg"],
                    ["make" => "Honda", "model" => "Civic", "year" => 2020, "price" => 35, "image" => "honda-civic.jpg"],
                    ["make" => "Ford", "model" => "Focus", "year" => 2018, "price" => 32, "image" => "ford-focus.jpg"]
                ];

                foreach ($cars as $i => $car):
                    echo "
                        <div class=\"car-card\" id=\"car-$i\">
                            <img src=\"$car[image]\" alt=\"$car[make] $car[model]\">
                            <div class=\"card-content\">
                                <h3>$car[make] $car[model]</h3>
                                <p>Year: $car[year]</p>
                                <p>Price: \$$car[price]/day</p>
                                <button class=\"book-button\">Book Now</button>
                            </div>
                        </div>
                    ";
                endforeach;
                ?>
            </div>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>We're passionate about providing top-quality vehicles at affordable prices. Our mission is to make car rental easy and enjoyable for everyone.</p>
        </section>

    <footer>
        <p>&copy; 2024 Car Rental. All rights reserved.</p>
    </footer>
    </main>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    <script src="script.js"></script>
</body>
</html>
