<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "pizza_store";

  $connection = new mysqli($servername, $username, $password, $db);
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $results = [
    'cheeses' => $connection->query("select * from topping where text_id like 'cheese-%'"),
    'sauces' => $connection->query("select * from topping where text_id like 'sauce-%'"),
    'meats' => $connection->query("select * from topping where text_id like 'meat-%'"),
    'fruits' =>$connection->query("select * from topping where text_id like 'fruit-%'")
  ];
 ?>
