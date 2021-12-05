<?php
    include("shared.php");
?>

<?php
    echo "$HTMLHeader";
    echo "$header";
?>

<body>
    <main>
      <div class="single-column-container">
      <h2>Are you a new or returning customer?</h2>
      <div id="new_or_returning">
        
        <!-- old button <a href="booking_new_customer.php">Book Now</a> -->
        <?php echo $BookBtnNewCustomer ?>
        <br>


        <!-- old button
        <a href="booking_returning_customer.php">Book Now</a> -->
        <?php echo $BookBtnReturningCustomer?>
      </div>
    </div>
  </main>
</body>

<?php echo $footer ?>
