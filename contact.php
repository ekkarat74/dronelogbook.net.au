<?php
    include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact - DroneLogbook Energy - Simplifying Industrial Drone Operations</title>
    <meta name="description" content="Dronelogbook.energy is committed to supporting the energy sector with tailored solutions. Contact us with questions or feedback.">
    <meta name="author" content="Dronelogbook">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Contact - DroneLogbook Energy">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:url" content="https://www.dronelogbook.com">
    <meta property="og:description" content="Dronelogbook.energy is committed to supporting the energy sector with tailored solutions. Contact us with questions or feedback.">

    <meta name="twitter:widgets:csp" content="on">
    <meta name="twitter:url" content="https://www.dronelogbook.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="DroneLogbook Energy">
    <meta name="twitter:description" content="Dronelogbook.energy is committed to supporting the energy sector with tailored solutions. Contact us with questions or feedback.">
    <meta name="twitter:text:description" content="Dronelogbook.energy is committed to supporting the energy sector with tailored solutions. Contact us with questions or feedback.">
    <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta name="twitter:site" content="@dronelogbook">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/robly.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/navigation.min.css" />
    <link rel="stylesheet" href="css/general-style.min.css?v=20210105" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />

    <script src="/_static/lib/jquery-3.6.1.min.js"></script>

    <style>
        #contactForm label {
            display: block;
        }

        #contact input[type=text],
        #contact input[type=email],
        #contact input[type=tel],
        #contact input[type=url],
        #contact textarea,
        #contact select {
            font-size: 14px !important;
            margin: 0 0 10px;
        }

        #contact select {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            padding: 10px;
            border-radius: 0px;
        }

        #contact #status {
            font-size: 14px !important;
            color: black !important;
            font-weight: 600;
        }

        .solutions-twig {
            height: 850px;
        }

        .solutions-twig>.column-left {
            width: 44%;
            top: 150px;
            overflow: visible;
        }

        .column-left,
        .column-right {
            z-index: 200000000;
            transform: none !important;
        }

        .column-right {
            top: 150px;
            margin-right: 20px;
            color: white;
        }

        @media only screen and (max-width: 768px) {
            .solutions-twig>.column-left {
                width: 100% !important;
                /* top: 45%; */
            }
        }
    </style>
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
                    <h1>Contact Us</h1>
                    <h2 class="sub-header long">DroneLogbook.energy is meant to be an evolving platform to support industrial drone operations. Feel free to help us to improve it to better suit your needs. Since the launch of the original DroneLogbook, we have received many helpful comments and suggestions for improvements and we look to continue that process here. Thank you! We look forward to continuing receive your feedback, so don't hesitate to contact us with the following form.</h2>
                </div>
            </div>
        </div>
        <div class="colored-bg"></div>
    </section>

    <section class="contact-form">
        <div class="contain">
            <div id="contact">
                <h3>Send us a message</h3>
                <?php include_once('../../profile/contactBlock.php'); ?>
            </div>
        </div>
    </section>

    <section class="readytouse">
        <h2 class="content-header">Ready to use DroneLogbook?</h2>
        <p class="content-sub-header">Create a free account</p>
        <div>
            <ul class="ui-buttons ui-footer">
                <li><a href="pricing.php" class="ui-black">Get Started</a></li>
                <li><a href="features.html" class="ui-white">Learn More</a></li>
            </ul>
        </div>
    </section>

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

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.vide.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>