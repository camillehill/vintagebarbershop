<?php
    include("shared.php");
?>

<?php
    echo "$HTMLHeader";
    echo "$header";
?>

<body>


    <main>
      <div class="outside_homepage">
        <section class="hero single-column-container">
            <h1>Mansfield's Premier Barbershop</h1>
            <p>A throwback barbershop experience with a modern touch.</p>
            <?php echo "$BookBtn"; ?>
            <br>
        </section>
        <section class="services single-column-container">
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
        <section class="location-hours single-column-container">
          <h2>Location & Hours</h2>
            <!-- Left side: Google maps iFrame -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13445.903655362958!2d-97.1414829!3d32.5934983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x627fc974e11233b2!2sVintage%20Barbershop%20LLC!5e0!3m2!1sen!2sus!4v1636830523506!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          <br>
          <p>We are located at the southwest corner of the intersection of Highway 287 and Debbie Lane, just east of Spring Creek Barbecue.</p>
          <p>Our address is:
          <a id="addresslink-homepage" href='https://www.google.com/maps/place/Vintage+Barbershop+LLC/@32.5934983,-97.1414829,15z/data=!4m2!3m1!1s0x0:0x627fc974e11233b2?sa=X&ved=2ahUKEwi6uZyh0M30AhUClWoFHZKXABQQ_BJ6BAhOEAU'>26 E Debbie Ln #104
          Mansfield, TX 76063</a></p>
          <!-- Right side: text -->

            <!-- Commenting this part out b/c our google maps iframe already contains this info

            <div id="location">
            <h2> Location</h2>

              <p>26 East Debbie Lane</p>
              <p>Mansfield, TX 76063</p>
              <p>(682) 518-0999</p>
            </div>
            -->

            <br>

            <h2>Hours</h2>
            <table id="hoursTable">
              <tr>
              <th>Tuesday-Friday</th>
              <td>9AM-6PM</td>
              </tr>

              <tr>
              <th>Saturday</th>
              <td>9AM-4PM</td>
              </tr>

              <tr>
              <th>Sunday & Monday</th>
              <td>Closed</td>
              </tr>
            </table>
        </section>
        <section class="our_work single-column-container">
          <h2>Our Work</h2>
          <div id="ourwork_images">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_3_189x250.png">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_5_194x250.png">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_6_171x250.png">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_4_169x250.png">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_1_236x250.png">
            <img class="haircut" src="img/Gallery Images/Top 7 images/top6_2_254x250.png">
          </div>
        </section>
        <section class="single-column-container">
          <h2>Our Staff</h2>
          <div class="our-staff">
            <div class="headshot">
              <img src="img/employees/holly_418x418.png" class="staffimg">
              <figcaption>Holly</figcaption>
            </div>
            <div class="headshot">
              <img src="img/employees/penni_418x418.png" class="staffimg">
              <figcaption>Penni</figcaption>
            </div>
            <div class="headshot">
              <img src="img/employees/sean_418x418.png" class="staffimg">
              <figcaption>Sean</figcaption>
            </div>
            <div class="headshot">
              <img src="img/employees/kendra_418x418.png" class="staffimg">
              <figcaption>Kendra</figcaption>
            </div>
          </div>
        </section>
        <section class="keeping-mansfield single-column-container">
          <h2 id="keeping_h2">Keeping Mansfield Looking sharp since 2008</h2>
          <p>From hot lather shaves and beard sculpting to flat tops, fades and military cuts, you'll look your best when you leave our shop.</p>
          <br>
          <p>Book an appointment with a professional who knows men's hair.</p>

          <?php echo $BookBtn ?>
        </section>
        <section class="testimonials single-column-container">
          <h2>What Our Customers Are Saying:</h2>
          <div class="testimonial_card">
            <h3 class="testimonial_name">Andre Gonzalez</h3>
            <!--image of customer could go here? headshot? -->
            Rating:<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--This is from w3schools.com (https://www.w3schools.com/howto/howto_css_star_rating.asp) -->

            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p class="testimonial_paragraph">So I’m older now and I need a bit more work than I used to. Sean shaved and trimmed my beard so fine that I felt beautiful. I’m a grown man and I am saying that it was great to feel beautiful!!  Thanks Sean.</p>
          </div>
          <div class="testimonial_card">
            <h3 class="testimonial_name">Steven Fennell</h3>
            <!--image of customer could go here? headshot? -->
            Rating:

            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p class="testimonial_paragraph">Everyone is great here. They cut your hair the way you ask for.  Highly recommend.</p>
          </div>
          <div class="testimonial_card">
            <h3 class="testimonial_name">Matthew Schultz</h3>
            <!--image of customer could go here? headshot? -->
            Rating:

            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p class="testimonial_paragraph">Make an appointment for a great haircut experience. Went in for my first time and the barbers were really cool they were making conversation asking about my day and making jokes. It was a good time and the haircut with a straight razor and beard trim turned out great. I'll definitely be coming back here.</p>
          </div>

          <div class="badges">
            <a href="https://www.yelp.com/biz/vintage-barbershop-mansfield"><img src="img/yelpstars.png" id="yelpstars" class="credibility-badge" width="200px"></a>
            <a href="https://www.google.com/search?q=vintage+barber+shop+mansfield+tx&oq=vintage+baber&aqs=chrome.2.69i57j0i10i433i457j0i402j46i10i175i199j0i10l6.3987j0j9&sourceid=chrome&ie=UTF-8#lrd=0x864e617752c739cb:0x627fc974e11233b2,1,,,"><img src="img/googlereviews.png" id="googlereviews" class="credibility-badge" width="200px"></a>
          </div>

        </section>

        </div>

        <?php echo $ViewGalleryBtn ?>
    </main>
</body>

<?php echo $footer ?>
