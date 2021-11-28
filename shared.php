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

$Navigation =
"
<nav>
<img src='img/logo/vintage_cropped.png' style='width:450px;' alt='vintage barbershop logo'>
    <ul class=\"nav-items\">
        <li class=\"nav-link\"><a href=\"index.php\">HOME</a></li>
        <li class=\"nav-link\"><a href=\"about.php\">ABOUT</a></li>
        <li class=\"nav-link\"><a href=\"gallery.php\">GALLERY</a></li>
        <li class=\"nav-link\"><a href='new_or_returning.php'>BOOK NOW</a></li>
    </ul>
</nav>";

$BookBtn = "<button><a href='booking.php'>BOOK NOW</a></button>";
$ViewGalleryBtn = "<button><a href='gallery.php'>View Gallery</a></button>";

$header =
"<header>
    $Navigation


</header>";

$footer =
"<footer>
    <h2 id=\"footerHeader\">Vintage Barbershop</h2>
    $Navigation

    <div class=\"social-media\">
        <a href=\"https://www.instagram.com\"> </a>
        <a href=\"https://www.yelp.com\"></a>
    </div>
    <hr>

    <p>© 2021 Vintage Barbershop, LLC | Disclaimer: this website was created for the Internet Marketing Communication course in Fall 2021, for educational purposes only. Visit <a href='https://www.thevintage-barbershop.com/'>Vintage Barbershop.com</a> for the actual company website.</p>
</footer>
</html>";

?>
