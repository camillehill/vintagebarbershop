<?php
$HTMLHeader =
"<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <title>Vintage Barbershop | Mansfield, Dallas-Fort Worth</title>
</head>";

// mobile
$logo = "<img class='mobile-logo' src='img/logo/vintage_cropped.png' style='width:150px;' alt='vintage barbershop logo'>";
$hamburger = "<img src='img/menu.png' alt='menu icon' style='width:25px;'>";


// desktop
$Navigationwithlogo =
"<nav>
<img src='img/logo/vintage_cropped.png' style='width:450px;' alt='vintage barbershop logo'>
    <ul class=\"nav-items\">
        <li class=\"nav-link\"><a href=\"index.php\">HOME</a></li>
        <li class=\"nav-link\"><a href=\"about.php\">ABOUT</a></li>
        <li class=\"nav-link\"><a href=\"gallery.php\">GALLERY</a></li>
        <li class=\"nav-link\"><a href='new_or_returning.php'>BOOK NOW</a></li>
    </ul>
</nav>";

$Navigationwithoutlogo =
"
<nav>
    <ul class=\"nav-items\">
        <li class=\"nav-link\"><a class='footerlink' href=\"index.php\">HOME</a></li>
        <li class=\"nav-link\"><a class='footerlink' href=\"about.php\">ABOUT</a></li>
        <li class=\"nav-link\"><a class='footerlink' href=\"gallery.php\">GALLERY</a></li>
        <li class=\"nav-link\"><a class='footerlink' href='new_or_returning.php'>BOOK NOW</a></li>
    </ul>
</nav>";

$MobileNavigation =
"<nav class=\"mobi-nav\">
    <ul class=\"nav-items\">
        <li class=\"nav-link\"><a class='footerlink' href=\"index.php\">HOME</a></li>
        <li class=\"nav-link\"><a class='footerlink' href=\"about.php\">ABOUT</a></li>
        <li class=\"nav-link\"><a class='footerlink' href=\"gallery.php\">GALLERY</a></li>
        <li class=\"nav-link\"><a class='footerlink' href='new_or_returning.php'>BOOK </a></li>
    </ul>
</nav>";

$BookBtn = "<button><a href='new_or_returning.php'>BOOK NOW</a></button>";
$BookBtnNewCustomer ="<button><a href='booking_new_customer.php'>I'm a New Customer</a></button>";
$BookBtnReturningCustomer ="<button><a href='booking_returning_customer.php'>I'm a Returning Customer</a></button>";
$ViewGalleryBtn = "<button><a href='gallery.php'>View Gallery</a></button>";

$Mobile =
"<div id='mobile-nav'>
    $logo
    <div class=\"menu\">
        $hamburger
        $MobileNavigation
    </div>
</div>";

$header =
"<header>
    $Navigationwithlogo
    $Mobile
</header>";

$footer =
"<footer>

    $Navigationwithoutlogo

    <div class=\"social-media\">
        <a href=\"https://www.instagram.com\"> </a>
        <a href=\"https://www.yelp.com\"></a>
    </div>
    <hr>

    <p>?? 2021 Vintage Barbershop, LLC | Disclaimer: this website was created for the Internet Marketing Communication course in Fall 2021, for educational purposes only. Visit <a class='footerlink' href='https://www.thevintage-barbershop.com/'>Vintage Barbershop.com</a> for the actual company website. View our privacy policy <a class='footerlink' href='https://www.termsfeed.com/live/c5414913-4b96-4802-9b17-eddf4e5778fa'>here</a>.</p>
</footer>
</html>";

?>
