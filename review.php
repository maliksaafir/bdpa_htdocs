<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Review Your Pizza</title>
  </head>
  <body>
    <div class="container">
      <h1>Your Order:</h1>
      <ul>
        <li><?php echo $_POST['cheese'] ?></li>
        <li><?php echo $_POST['sauce'] ?></li>
        <?php foreach ($_POST['meat'] as $topping) {echo "<li>$topping</li>";} ?>
        <?php foreach ($_POST['fruit'] as $topping) {echo "<li>$topping</li>";} ?>
      </ul>
    </div>
  </body>
</html>
