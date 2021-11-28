<?php
    include("shared.php");
?>

<?php
    echo "$HTMLHeader";
    echo "$header";
?>

<body>
    <main>

      <h2>Are you a new or returning customer?</h2>
<div id="new_or_returning">
        <h3>New customers</h3>
        <!-- old button <a href="booking_new_customer.php">Book Now</a> -->
        <?php echo $BookBtnNewCustomer ?>
        <br>

        <h3>Returning customers</h3>
        <!-- old button 
        <a href="booking_returning_customer.php">Book Now</a> -->
        <?php echo $BookBtnReturningCustomer?>
</div>
  </main>
</body>

<?php echo $footer ?>
