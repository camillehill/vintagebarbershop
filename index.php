<?php
    include("shared.php");
?>

<?php
    echo "$HTMLHeader";
    echo "$header";
?>

<body>
    <!-- hero section-->
    <section class="hero">
        <h2>Mansfield's premier barbershop</h2>
        <p>A throwback barbershop experience with a modern touch.</p>
        <?php echo "$BookBtn"; ?>
    </section>
    <main>
        <section class="services">
            <h2 id="ourservices_h2">Our Services</h2>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13445.903655362958!2d-97.1414829!3d32.5934983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x627fc974e11233b2!2sVintage%20Barbershop%20LLC!5e0!3m2!1sen!2sus!4v1636830523506!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          <br>
          <!-- Right side: text -->
          <div id="right_side_LH">

            <div id="location">
            <h2> Location</h2>

              <p>26 East Debbie Lane</p>
              <p>Mansfield, TX 76063</p>
              <p>(682) 518-0999</p>
            </div>

            <br>
            <div id="hours">
            <h2>Hours</h2>

              <p>Tuesday-Friday</p>
              <p>9AM-6PM</p>
              <br>
              <p>Saturday</p>
              <p>9AM-4PM</p>
              <br>
              <p>Sunday & Monday</p>
              <p>Closed</p>
            </div>
          </div>
        </section>
        <h2>Our Staff</h2>
        <section class="our-staff">

          <div id="holly">
            <img src="img/employees/holly_418x418.png">
            <figcaption>Holly</figcaption>
          </div>
          <div id="penni">
            <img src="img/employees/penni_418x418.png">
            <figcaption>Penni</figcaption>
          </div>
          <div id="sean">
            <img src="img/employees/sean_418x418.png">
            <figcaption>Sean</figcaption>
          </div>
          <div id="kendra">
            <img src="img/employees/kendra_418x418.png">
            <figcaption>Kendra</figcaption>
          </div>
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
          <img src="img/Gallery Images/Top 7 images/top6_6_171x250.png">
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
