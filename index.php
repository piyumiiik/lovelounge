<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latte Love Lounge | Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar section-content">
                <a href="#" class="nav-logo">
                    <img src="icon.jpg" alt="Coffee Shop Icon" class="icon">
                    <span class="logo-text">LLL</span>
                </a>
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu"></ul>
                    <?php
                        $menu_items = ["HOME", "About", "Menu", "Gallery", "Contact"];
                        foreach ($menu_items as $item) {
                            echo "<li class='nav-item'><a href='#' class='nav-link'>$item</a></li>";
                        }
                    ?>
                </ul>
            </nav>
        </header>
        
        <section class="sec1">
            <div class="content-container">
                <div>
                    <h1>BEST COFFEE</h1>
                    <h3>WHERE EVERY CUP TELLS A STORY! <br>Sip, Savor & Stay Inspired.</h3>
                    <a href="#" class="button-1">Order Your Coffee</a>
                </div>
                <div>
                    <img src="home.jpg" alt="Illustration of coffee and cozy atmosphere" class="sec1-image">
                </div>
            </div>
        </section>
    </body>
</html>
