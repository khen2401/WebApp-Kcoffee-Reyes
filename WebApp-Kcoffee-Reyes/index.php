<?php
    // Basic configuration
    $page_title = "Welcome to KCoffee!";
    $description = "Every sip hits diff";
    $year = date('Y'); // Current year

    // Define an array of navigation items
    $nav_items = [
        'Home' => 'index.php',
        'About' => 'about.php',
        'Services' => 'services.php',
        'Contact' => 'contact.php'
    ];

    // Define an array of services
    $services = [
        ['title' => 'Beverage Preparation and Serving', 'description' => 'Offers a variety of drinks that would satisfy your coffee needs.'],
        ['title' => 'Food Options', 'description' => 'We provide light snacks ,patries and sandwiches that compliment with your drinks.'],
        ['title' => 'Wi-Fi and Workspace', 'description' => 'We provide free Wi-Fi and comfortable environment for customers to work, or relax making them popular spots for remote work or casual meetings..'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <h1><?php echo $page_title; ?></h1>
            <p><?php echo $description; ?></p>
            <nav>
                <ul>
                    <?php
                        foreach ($nav_items as $name => $link) {
                            echo "<li><a href='$link'>$name</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Banner Section -->
    <section class="hero">
        <div class="container">
            <h2>Your standard Coffee Shop</h2>
            <p>We provide unique blends of coffee for you to try.</p>
            <a href="#services" class="cta-button">Explore Our Services</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to KCoffee, where every cup tells a story! Nestled conveniently beside some of the city's top schools, KCoffee is the perfect spot for students, teachers, and coffee lovers alike to unwind, refuel, and get inspired. Our passion for quality coffee drives us to offer a wide variety of unique blends, each crafted to bring out rich, distinct flavors that you won’t find anywhere else. Whether you’re grabbing a quick cup on your way to class or settling in for a study session, we’re here to fuel your day with great coffee and even better vibes.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-grid">
                <?php
                    foreach ($services as $service) {
                        echo "<div class='service-box'>";
                        echo "<h3>{$service['title']}</h3>";
                        echo "<p>{$service['description']}</p>";
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or would like to work with us, feel free to reach out!</p>
            <form action="contact_form.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo $year; ?> My PHP Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
