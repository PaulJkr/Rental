<?php
// Include header and footer
include_once 'header.php';
include_once 'footer.php';
?>

<main>
    <h1>About Us</h1>

    <section id="about">
        <div class="about-content">
            <h2>Our Story</h2>
            <p>We're passionate about providing top-quality vehicles at affordable prices. Our mission is to make car rental easy and enjoyable for everyone.</p>

            <h2>Our Services</h2>
            <ul class="service-list">
                <li><i class="fas fa-car"></i> Wide selection of cars for all occasions</li>
                <li><i class="fas fa-dollar-sign"></i> Competitive pricing</li>
                <li><i class="fas fa-user"></i> Professional staff ready to assist you</li>
                <li><i class="fas fa-calendar-alt"></i> Easy booking process</li>
            </ul>
        </div>
        
        <img src="images/locations.jpg" alt="About Us Image" class="about-image">
    </section>

    <h2>Our Team</h2>
    <div class="team-grid">
        <div class="team-member">
            <img src="images/panda.jpg" alt="Team Member 1">
            <h3>Paul Omondi</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="team-member">
            <img src="images/locations.jpg" alt="Team Member 2">
            <h3>John Doe</h3>
            <p>Andrew Ndegwa</p>
        </div>
        <div class="team-member">
            <img src="images/panda.jpg" alt="Team Member 3">
            <h3>Ashley Nice</h3>
            <p>Customer Service Representative</p>
        </div>
    </div>

    <h2>Contact Information</h2>
    <address class="contact-info">
        Amari Rentals <br>
        1738, Kenya<br>
        Phone: +254 782 6117 36<br>
        Email: info@amarirental.com<br>
        Hours: Mon-Fri 8am-6pm, Sat 9am-5pm, Sun Closed
    </address>
</main>

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        color: #333;
        margin: 0;
        padding: 0;
        background-color: rgba(255, 255, 255, 0.95); /* Semi-transparent white background */
    }

    main {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #007bff;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
        margin-bottom: 30px;
    }

    h2 {
        text-align: center;
        color: #0066cc;
        margin-top: 40px;
        margin-bottom: 30px;
    }

    /* About Section Styles */
    #about {
        background-color: #f0f0f0;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    #about:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    }

    .about-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Team Grid Styles */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .team-member img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        max-width: 150px;
    }

    /* Contact Information Styles */
    .contact-info {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .team-grid {
            grid-template-columns: 1fr;
        }
    }

    /* About Image Styles */
    .about-image {
        width: 100%;
        height: auto;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Full-page Background Color with Scroll Transition */
    .bg-scroll {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, #ff99cc, #ff66cc, #ff33cc, #ff00cc, #ff0066);
        opacity: 0.7;
        z-index: -1;
        transition: all 3s ease-in-out;
    }

    body:hover .bg-scroll {
        transform: translateY(-50%);
    }
</style>
