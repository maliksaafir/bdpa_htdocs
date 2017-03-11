<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Make Your Pizza</title>
  </head>
  <body>
    <div class="container">
      <h1>Choose Your Toppings</h1>
      <form action="review.php" method="POST">
        <div class="group">
          <label for="cheese">Cheese</label>
          <?php while($row = mysqli_fetch_assoc($results['cheeses'])) { ?>
            <input name="cheese" type="radio" value="<?php echo $row['name']; ?>">
            <span><?php echo $row['name'], ": $", $row['price']; ?></span>
          <?php } ?>
        </div>
        <div class="group">
          <label>Sauce</label>
          <?php while($row = mysqli_fetch_assoc($results['sauces'])) { ?>
            <input name="sauce" type="radio" value="<?php echo $row['name']; ?>">
            <span><?php echo $row['name']; ?>: Free</span>
          <?php } ?>
        </div>
        <div class="group">
          <label>Meat</label>
          <?php while($row = mysqli_fetch_assoc($results['meats'])) { ?>
            <input name="meat[]" type="checkbox" value="<?php echo $row['name']; ?>">
            <span><?php echo $row['name'], ": $", $row['price']; ?></span>
          <?php } ?>
        </div>
        <div class="group">
          <label>Fruits and Veggies</label>
          <?php while($row = mysqli_fetch_assoc($results['fruits'])) { ?>
            <input name="fruit[]" type="checkbox" value="<?php echo $row['name']; ?>">
            <span><?php echo $row['name'], ": $", $row['price']; ?></span>
          <?php } ?>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
