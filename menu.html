<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>🍽️ TastyBites</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="book_table.php">Book Table</a>
    <a href="order.php">Order</a>
  </nav>
</header>

<section class="container">
  <?php
  $query = "SELECT * FROM menu";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          echo "
          <div class='card'>
            <h3>{$row['item_name']}</h3>
            <p>{$row['description']}</p>
            <p><strong>₹{$row['price']}</strong></p>
            <form method='POST' action='order.php'>
              <input type='hidden' name='item' value='{$row['item_name']}'>
              <input type='hidden' name='price' value='{$row['price']}'>
              <button class='btn'>Order Now</button>
            </form>
          </div>
          ";
      }
  } else {
      echo "<p>No menu items available.</p>";
  }
  ?>
</section>

</body>
</html>
