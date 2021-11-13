<?php
    include("shared.php");
?>

<?php
    echo $HTMLHeader;
    echo $header;
?>

<body>
    <!-- hero section-->
    <section class="hero">
        <h1>Mansfield's Premier Barbershop</h1>
        <p>A throwback barbershop experience with a modern touch.</p>
        <?php echo $BookBtn ?>
    </section>
    <main>
        <section class="services">
            <h2>Our Services</h2>
            <table>
                <tr>
                    <td>Men's Regular Haircut</td>
                    <td>$25</td>
                </tr>
                <tr>
                    <td>Razor Fade</td>
                    <td>$30</td>
                </tr>
                <tr>
                    <td>Flat Top</td>
                    <td>$27</td>
                </tr>
                <tr>
                    <td>Specialty Cuts</td>
                    <td>$30 and up</td>
                </tr>
                <tr>
                    <td>Beard Trim</td>
                    <td>$5-15</td>
                </tr>
                <tr>
                    <td>Shaves</td>
                    <td>$30-35</td>
                </tr>
                <tr>
                    <td>Kids (ages up to 8)</td>
                    <td>$20</td>
                </tr>
                <tr>
                    <td>Kids (ages 8-15)</td>
                    <td>$22</td>
                </tr>
                <tr>
                    <td>Woman's Cut</td>
                    <td>$25 and up</td>
                </tr>
            </table>
        </section>
        <section class="location-hours">

            <!-- Left side: Google maps iFrame -->
          <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyznHUndhToYRsjMS4XTJf2I&key=...">
          </iframe>
          <!-- Right side: text -->
          <h2> Location & Hours </h2>
          <div>
            <p>26 East Debbie Lane</p>
            <p>Mansfield, TX 76063</p>
            <p>(682) 518-0999</p>
          </div>
          <div>
            <p>Tuesday-Friday</p>
            <p>9AM-6PM</p>
            <br>
            <p>Saturday</p>
            <p>9AM-4PM</p>
            <br>
            <p>Sunday & Monday</p>
            <p>Closed</p>
          </div>
        </section>
        <section class="our-staff">
          <h2>Our Staff</h2>
            <img src="img/employees/holly_418x418.png">
            <figcaption>Holly</figcaption>
            <img src="img/employees/penni_418x418.png">
            <figcaption>Penni</figcaption>
            <img src="img/employees/sean_418x418.png">
            <figcaption>Sean</figcaption>
            <img src="img/employees/kendra_418x418.png">
            <figcaption>Kendra</figcaption>
        </section>
        <section class="keeping_mansfield">
          <h2>Keeping Mansfield Looking sharp since 2008</h2>
          <p>From hot lather shaves and beard sculpting to flat tops, fades and military cuts, you'll look your best when you leave our shop.</p>
          <br>
          <p>Book an appointment with a professional who knows men's hair.</p>
          <?php echo $BookBtn ?>
        </section>
        <section class="our_work">
          <h2>Our Work</h2>
          <img src="img/Gallery Images/Top 7 images/top6_3_189x250.png">
          <img src="img/Gallery Images/Top 7 images/top6_5_194x250.png">
          <img src="img/Gallery Images/Top 7 images/top6_6_edited_originalsize.png">
          <img src="img/Gallery Images/Top 7 images/top6_4_169x250.png">
          <img src="img/Gallery Images/Top 7 images/top6_1_236x250.png">
          <img src="img/Gallery Images/Top 7 images/top6_2_254x250.png">
          <?php echo $ViewGalleryBtn ?>
        </section>
    </main>
</body>

<?php echo $footer ?>
<!-- Navigation links, "book now" button

hero section with image, h1, "book now" button?

h2 - Our Services

h2 - "about us" blurb

h2 - "our staff" images

"our location" section

footer
 -->
