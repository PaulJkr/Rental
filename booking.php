<?php
// booking.php

// Get car details from URL parameters
$make = $_GET['make'] ?? '';
$model = $_GET['model'] ?? '';
$year = $_GET['year'] ?? '';
$price = $_GET['price'] ?? '';

// Display car details
echo "<h2>Booking Confirmation</h2>";
echo "<p>Car Details:</p>";
echo "<div id='car-details'>";
echo "<p>Make: $make</p>";
echo "<p>Model: $model</p>";
echo "<p>Year: $year</p>";
echo "<p>Price: \$${price}/day</p>";
echo "</div>";

// Rest of your HTML content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation | Amari Rentals</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="navbar right-nav-list">
            <div class="logo">AMARI RENTALS</div>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
            </ul>
            <button class="menu-btn"><i class="fas fa-bars"></i></button>
        </nav>
    </header>

    <main>
        <h1>Booking Confirmation</h1>
        <p>Car Details:</p>
        <div id="car-details"></div>
        <form id="booking-form">
            <label for="name">Name:</label>
            <input type="text" id="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" required>

            <label for="pickup-date">Pickup Date:</label>
            <input type="date" id="pickup-date" required>

            <label for="return-date">Return Date:</label>
            <input type="date" id="return-date" required>

            <button type="submit">Confirm Booking</button>
        </form>
    </main>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    <script src="script.js"></script>
</body>
</html>
