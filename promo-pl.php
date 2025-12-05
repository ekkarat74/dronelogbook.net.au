<?php
    include_once('../../php_header.php');
    include_once ('mail/Mailer.php');

    $action = getPOSTParam("action");
    if ($action=="SEND_MAIL") {

        $name = getPOSTParam("name");
        $email = getPOSTParam("email");
        $phone = getPOSTParam("phone");
        $company = getPOSTParam("company");
        $country = getPOSTParam("country");

        $to = EMAIL_CUSTOMERSERVICE;
		$from = EMAIL_SUPPORT;
        $subject = "DroneLogbook.energy Promo PL";

        $textContent = "Name=" . $name . " / Phone=" . $phone . " / Company=" . $company . " / Country=" . $country; 

        Mailer::sendHTMLMail ("Contact Form: Energy Promo PL",  $subject, $from, $to , "<b>From Email :</b> $email<br/><br/>$textContent");	
		$mail_status = "Your message has been sent. We will contact you shortly.<br/>Thank you.";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Solutions - DroneLogbook Energy - Simplifying Industrial Drone Operations</title>
    <meta name="description" content="DroneLogbook.Energy provides a customized private label solution to firms who need enhanced data security and operational flexibility.">
    <meta name="author" content="Dronelogbook">

    <meta property="og:title" content="Solutions - DroneLogbook Energy">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta property="og:image:width" content="1200" />
    <meta property="og:url" content="https://www.dronelogbook.com">
    <meta property="og:description" content="DroneLogbook.Energy provides a customized private label solution to firms who need enhanced data security and operational flexibility.">
    <meta name="twitter:widgets:csp" content="on">
    <meta name="twitter:url" content="https://www.dronelogbook.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="DroneLogbook Energy">
    <meta name="twitter:description" content="DroneLogbook.Energy provides a customized private label solution to firms who need enhanced data security and operational flexibility.">
    <meta name="twitter:text:description" content="DroneLogbook.Energy provides a customized private label solution to firms who need enhanced data security and operational flexibility.">
    <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
    <meta name="twitter:site" content="@dronelogbook">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/robly.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/navigation.min.css" />
    <link rel="stylesheet" href="css/general-style.min.css?v=20210105" />
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <a href="index.html" class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                <img class="logo" src="img-min/logo/Logo-whiteText.png">
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
    <section class="laptop internal">
        <div class="page-wrapper">
            <div class="content-container">
                <div class="column-left">
                    <div class="edition">Energy Edition</div>                    
                    <h1>DroneLogbook.energy Private Label</h1>
                    <h2 class="sub-header long">Our Private Label platform provides an added level of security, operational flexibility, and customization to those who use drones in the energy sector and have elevated security and operational needs. DroneLogbook.energy was developed with the idea that large energy organizations have the need for centralized monitoring for compliance/operations management while allowing for distributed local operations. A few key components include:</h2>
                    <h2 class="sub-header">
                        <ul>
                            <li>- Master Admin for Central Oversight</li>
                            <li>- Multiple Organizations (to allow for segregated data)</li>
                            <li>- Ability to Transfer Assets/Pilots between organizations</li>
                            <li>- Master Personnel/Flight/Equipment Overview</li>
                            <li>- Event Triggers (Flights exceeding X altitude etc..)</li>
                        </ul>  
                    </h2>
                </div>
            </div>
        </div>
        <div class="colored-bg"></div>
    </section>
    <section class="solutions">
        <div class="container-fluid">
            <div class="row">
                <div class="page-wrapper">
                    <div class="content-wrapper">
                    <div class="logo-before">
                        <h2 class="content-header">DroneLogbook.energy Limited Time Offer for Energy Drone Coalition Members</h2>
                        <!--<img src="img/logo-circle.png" alt="" class="solutions__img img-responsive">-->
                        <p class="content-sub-header">Register between now and January 23rd for a 6 month trial of DroneLogbook.energy private label platform for $1995. This trial period provides for unlimited flights, pilots, equipment... no restrictions as you test and scale your drone operations. Once the trial is completed you can continue on the platform at a price designed to fit your operations (post trial pricing based on number of pilots and available prior to trial). 
                            <br>At the end of the trial period if our platform does not meet your needs or expectations you can walk away at no obligation. No need to enter contract up front.
                        </p>
                        <p>Trial must commence by March 31st 2019 to claim this offer.</p>
                    </div> 
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="readytouse">
        <?php if (empty($mail_status)) { ?>
        <h2 class="content-header">Contact us for our trial offer.</h2>      
        <section class="contact-form">
                <div class="contain">
                    <div id="contact">
                        <h3>Contact Form</h3>
                        <form action="promo-pl.php" method="POST">
                            <input type="hidden" name="action" id="action" value="SEND_MAIL"/>
                                <p>Name</p> <input type="text" name="name" id="name"  placeholder="Your name..">
                                <p>Email</p> <input type="text" name="email" id="email" placeholder="Your email..">
                                <p>Phone</p> <input type="text" name="phone" id="phone" placeholder="Your phone number..">
                                <p>Company</p> <input type="text" name="company" id="company" placeholder="Your company name..">
                                <p>Country</p> <input type="text" name="country" id="country" placeholder="Where are you located?">
                                <ul class="ui-buttons ui-footer">
                                    <li><input type="submit" value="Submit" class="ui-black"></li>
                                    <li><input type="reset" value="Clear" class="ui-black"></li>
                                </ul>
                        </form>
                    </div>
                </div>
        </section>
        <?php } else { ?>
            <h2 class="content-header"><?php echo $mail_status; ?></h2> 
        <?php } ?>
    </section>
    <section class="appstore">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <!--                <h1 class="appstore__heading">Lorem ipsum</h1>-->
                        <p class="appstore__desc">The DroneLogbook solution is based on a cloud infrastructure with secure data storage, online web application accompanied by our mobile application for offline access and easy synchronization with your cloud based account. In addition, the mobile app provides you with access to the latest airspace status updates, local weather and solar index reading that might affect your operations.</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--center">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--itunes-lg">
                        <img src="img-min/mobileApp3.png" alt="Download on the App Store"
                             class="appstore__img img-responsive">
                    </a>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 appstore--alignment">
                        <a href="https://itunes.apple.com/fr/app/dronelogbook-companion/id1439490937?l=en&amp;mt=8" target="_blank" class="appstore__link-item appstore__link-item--top">
                        <img src="img-min/download-app-apple.svg" alt="Download on the App Store"
                             class="appstore__img img-responsive">
                    </a>
                        <a href="https://play.google.com/store/apps/details?id=com.droneanalytics.dlbmobile" target="_blank" class="appstore__link-item">
                        <img src="img-min/download-app-android.svg" alt="Get It On Google Play"
                             class="appstore__img img-responsive">
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <!--<ul class="icons">-->
        <!--<li class="icons__item">-->
        <!--<a href="http://www.twitter.com/DroneLogbook" target="_blank" class="icons__logo icons__logo&#45;&#45;fa-twitter"></a>-->
        <!--</li>-->
        <!--</ul>-->
        <ul class="footer-menu">
            <li class="footer-menu__item">DroneLogbook</li>
            <li class="footer-menu__item"><a href="https://www.dronelogbook.energy/terms.php" class="footer-menu__link">Terms of Service</a></li>
            <li class="footer-menu__item"><a class="footer-menu__link" href="contact.php">Contacts</a></li>
            <li class="footer-menu__item">
                <a href="http://www.twitter.com/DroneLogbook" target="_blank" class="icons__logo icons__logo--fa-twitter"></a>
            </li>
        </ul>
    </footer>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
    
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>