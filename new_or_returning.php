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

        <h3>New customers</h3>
        <a href="booking_new_customer.php">Book Now</a>

        <br>

        <h3>Returning customers</h3>
        <a href="booking_returning_customer.php">Book Now</a>

  </main>
</body>

<?php echo $footer ?>