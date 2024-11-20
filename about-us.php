<?php
include_once 'header.php';
include_once 'footer.php';

?>

<main>
    <h1>About Us</h1>
    
    <section class="about-section">
        <img src="/images/about-us-image.jpg" alt="About Us Image" class="about-image">
        
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
    </section>

    <h2>Our Team</h2>
    <div class="team-grid">
        <div class="team-member">
            <img src="/images/team-member-1.jpg" alt="Team Member 1">
            <h3>Jane Smith</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="team-member">
            <img src="/images/team-member-2.jpg" alt="Team Member 2">
            <h3>John Doe</h3>
            <p>Operations Manager</p>
        </div>
        <div class="team-member">
            <img src="/images/team-member-3.jpg" alt="Team Member 3">
            <h3>Mary Johnson</h3>
            <p>Customer Service Representative</p>
        </div>
    </div>

    <h2>Contact Information</h2>
    <address class="contact-info">
        CarRental Service<br>
        123 Main St, Anytown USA<br>
        Phone: +1 (555) 123-4567<br>
        Email: info@carrental.com<br>
        Hours: Mon-Fri 8am-6pm, Sat 9am-5pm, Sun Closed
    </address>
</main>

<style>
    .about-section {
        display: flex;
        gap: 30px;
    }

    .about-image {
        width: 100%;
        height: auto;
        max-width: 400px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .about-content {
        text-align: left;
    }

    .service-list {
        list-style-type: none;
        padding-left: 20px;
    }

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
</style>
