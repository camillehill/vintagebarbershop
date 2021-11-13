<?php
$HTMLHeader =
"<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"text/css\" type=\"stylesheet\" href=\"style.css\">
    <title>Vintage Barbershop | Mansfield, Dallas-Fort Worth</title>
</head>";

$Navigation =
"<nav>
    <ul class=\"nav-items\">
        <li class=\"nav-link\"><a href=\"index.php\">Home</a></li>
        <li class=\"nav-link\"><a href=\"about.php\">About</a></li>
        <li class=\"nav-link\"><a href=\"gallery.php\">Gallery</a></li>
    </ul>
</nav>";

$BookBtn = "<button><a href='https://www.vagaro.com/us04/vintagebarbershop1'>Book Now</a></button>";
$ViewGalleryBtn = "<button><a href='gallery.php'>View Gallery</a></button>";

$header =
"<header>
    echo $Navigation;
    <h1>Vintage Barbershop</h1>
    echo $BookBtn;
</header>";

$footer =
"<footer>
    <h2 id=\"footerHeader\">Vintage Barbershop</h2>
    echo $Navigation;

    <div class=\"social-media\">
        <a href=\"https://www.instagram.com\"> </a>
        <a href=\"https://www.yelp.com\"></a>
    </div>
    <hr>
    <p>© 2021 Vintage Barbershop, LLC</p>
</footer>
</html>";

?>


<!-- What do we need to put in the shared file? -> What components do we want to re-use across the site?
Some ideas:
html header
navigation links code
footer code
"book now" button code -->
