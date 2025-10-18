<?php
include('db.php');

// Handle new order form submission
if (isset($_POST['order'])) {
    $customer = $_POST['customer_name'];
    $item = $_POST['item'];
    $price = $_POST['price'];

    $insert = "INSERT INTO orders (customer_name, item, price) 
               VALUES ('$customer', '$item', '$price')";
    if (mysqli_query($conn, $insert)) {
        $msg = "✅ Order placed successfully!";
    } else {
        $msg = "❌ Error placing order: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Food - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>🍽️ TastyBites</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="book_table.php">Book Table</a>
    <a href="payment.php">Payment</a>
  </nav>
</header>

<form method="POST">
  <h2>🛒 Place Your Order</h2>

  <?php if(isset($msg)) echo "<p style='color:green;font-weight:600;'>$msg</p>"; ?>

  <input type="text" name="customer_name" placeholder="Your Name" required>
  <select name="item" required>
    <option value="">Select Item</option>

    <?php
    // Fetch items from menu table
    $menu = mysqli_query($conn, "SELECT * FROM menu");
    while ($row = mysqli_fetch_assoc($menu)) {
      echo "<option value='{$row['item_name']}' data-price='{$row['price']}'>{$row['item_name']} - ₹{$row['price']}</option>";
    }
    ?>

  </select>
  <input type="number" step="0.01" name="price" placeholder="Enter Price" required>
  <button class="btn" name="order">Place Order</button>
</form>

<hr style="margin:2rem 0;">

<section class="container">
  <h2 style="width:100%;text-align:center;">📋 Recent Orders</h2>

  <table border="1" style="width:90%;margin:1rem auto;border-collapse:collapse;text-align:center;">
    <tr style="background:#ff512f;color:white;">
      <th>ID</th>
      <th>Customer</th>
      <th>Item</th>
      <th>Price</th>
      <th>Status</th>
      <th>Ordered At</th>
    </tr>

    <?php
    $query = "SELECT * FROM orders ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
              <td>{$row['id']}</td>
              <td>{$row['customer_name']}</td>
              <td>{$row['item']}</td>
              <td>₹{$row['price']}</td>
              <td>{$row['status']}</td>
              <td>{$row['created_at']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No orders yet.</td></tr>";
    }
    ?>
  </table>
</section>

</body>
</html>
