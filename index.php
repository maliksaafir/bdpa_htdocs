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
          <input name="cheese" type="radio" value="Regular Cheese"><span>Regular Cheese</span>
          <input name="cheese" type="radio" value="Extra Cheese"><span>Extra Cheese</span>
        </div>
        <div class="group">
          <label>Sauce</label>
          <input name="sauce" type="radio" value="Tomato Sauce"><span>Tomato Sauce</span>
          <input name="sauce" type="radio" value="Pesto Sauce"><span>Pesto Sauce</span>
          <input name="sauce" type="radio" value="Cheese Sauce"><span>Cheese Sauce</span>
        </div>
        <div class="group">
          <label>Meat</label>
          <input name="meat[]" type="checkbox" value="Pepperoni"><span>Pepperoni</span>
          <input name="meat[]" type="checkbox" value="Sausage"><span>Sausage</span>
          <input name="meat[]" type="checkbox" value="Ham"><span>Ham</span>
          <input name="meat[]" type="checkbox" value="Bacon"><span>Bacon</span>
          <input name="meat[]" type="checkbox" value="Anchovies"><span>Anchovies</span>
          <input name="meat[]" type="checkbox" value="Chicken"><span>Chicken</span>
        </div>
        <div class="group">
          <label>Fruits and Veggies</label>
          <input name="fruit[]" type="checkbox" value="Bell Peppers"><span>Bell Peppers</span>
          <input name="fruit[]" type="checkbox" value="Onions"><span>Onions</span>
          <input name="fruit[]" type="checkbox" value="Olives"><span>Olives</span>
          <input name="fruit[]" type="checkbox" value="Pineapple"><span>Pineapple</span>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>