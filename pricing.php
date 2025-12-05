<?php
    include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pricing - DroneLogbook Energy - Simplifying Industrial Drone Operations</title>
    <meta name="description" content="Dronelogbook.Energy provides flexible pricing models to support everyone from contract pilots to enterprise operations.">
    <meta name="author" content="Dronelogbook">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Pricing - DroneLogbook Energy">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:url" content="https://www.dronelogbook.com">
    <meta property="og:description" content="Dronelogbook.Energy provides flexible pricing models to support everyone from contract pilots to enterprise operations.">

    <meta name="twitter:widgets:csp" content="on">
    <meta name="twitter:url" content="https://www.dronelogbook.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="DroneLogbook Energy">
    <meta name="twitter:description" content="Dronelogbook.Energy provides flexible pricing models to support everyone from contract pilots to enterprise operations.">
    <meta name="twitter:text:description" content="Dronelogbook.Energy provides flexible pricing models to support everyone from contract pilots to enterprise operations.">
    <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta name="twitter:site" content="@dronelogbook">

    <script src="/_static/lib/skel.min.js"></script>
    <script src="/_static/lib/skel-panels.min.js"></script>

    <link rel="stylesheet" href="/_static/lib/skel-noscript.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/navigation.min.css" />
    <link rel="stylesheet" href="css/general-style.min.css?v=20210105" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <a href="index.html" class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <img class="logo" src="img-min/logo/Logo-whiteText.png" alt="Logo">
                </a>
                <nav id="nav-links">
                    <a href="solutions.html" class="nav-link">Solutions</a>
                    <a href="features.html" class="nav-link">Features</a>
                    <a href="pricing.php" class="nav-link">Pricing</a>
                    <a href="partners.html" class="nav-link">Partners</a>
                    <a href="faq.html" class="nav-link">FAQ </a>
                    <a href="contact.php" class="nav-link">Contact Us </a>
                    <a href="/profile/login.php" class="nav-link signIn">Sign In</a>
                </nav>
                <div onclick="toggleMobileNav(this)" class="mobile-nav-container">
                    <div class="mobile-nav"></div>
                </div>
            </div>
        </div>
        <div class="mobile-links">
            <nav id="mobile-nav-links">
                <a href="solutions.html" class="nav-link">Solutions</a>
                <a href="features.html" class="nav-link">Features</a>
                <a href="pricing.php" class="nav-link">Pricing</a>
                <a href="partners.html" class="nav-link">Partners</a>
                <a href="faq.html" class="nav-link">FAQ </a>
                <a href="contact.php" class="nav-link">Contact Us </a>
                <a href="/profile/login.php" class="nav-link btn">Sign In</a>
            </nav>
        </div>
    </header>

    <section class="laptop internal features">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left">
                    <div class="edition">Energy Edition</div>
                    <h1>We have a plan for every pilot</h1>
                    <h2 class="sub-header long">DroneLogbook has developed plans to suit all levels of commercial drone operations from one person shop to multi-location operations. In addition, we have platforms designed to help drone manufacturers better support their customers via an end to end solution to enhance customer experience.</h2>
                </div>
            </div>
        </div>
        <div class="colored-bg"></div>
    </section>

    <?php include_once("../../payment/subscriptions.php"); ?>

    <section class="appstore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <p class="appstore__desc">The DroneLogbook solution is based on a cloud infrastructure with secure data storage, online web application accompanied by our mobile application for offline access and easy synchronization with your cloud based account. In addition, the mobile app provides you with access to the latest airspace status updates, local weather and solar index reading that might affect your operations.</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--center">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--itunes-lg">
                            <img src="img-min/mobileApp3.png" alt="Download on the App Store" class="appstore__img img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--alignment">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--top">
                            <img src="img-min/download-app-apple.svg" alt="Download on the App Store" class="appstore__img img-responsive">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.droneanalytics.dlbmobile" target="_blank" class="appstore__link-item">
                            <img src="img-min/download-app-android.svg" alt="Get It On Google Play" class="appstore__img img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <ul class="footer-menu">
            <li class="footer-menu__item">DroneLogbook</li>
            <li class="footer-menu__item"><a href="https://www.dronelogbook.energy/terms.php" class="footer-menu__link">Terms of Service</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="contact.php">Contacts</a></li>
            <li class="footer-menu__item">
                <a href="http://www.twitter.com/DroneLogbook" target="_blank" class="icons__logo icons__logo--fa-twitter"></a>
            </li>
        </ul>
    </footer>

    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>