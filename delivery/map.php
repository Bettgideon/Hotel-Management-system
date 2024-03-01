<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include './components/header.php'; ?>
  <body>
    <?php include './components/navbar.php'; ?>

<div class="container mt-5">
<iframe width='100%' height='500' src='https://maps.google.com/maps?q=<?php echo  $_SESSION['request_latitude'];?>, <?php echo $_SESSION['request_longitude'];?>&output=embed'></iframe>
</div>
<?php include 'components/scripts.php';?>
    <!-- <script src='./static/js/app.js'></script> -->
  </body>
</html>