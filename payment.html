<?php
include('db.php');

// Handle payment form submission
if (isset($_POST['pay'])) {
    $order_id = $_POST['order_id'];
    $customer = $_POST['customer_name'];
    $amount = $_POST['amount'];
    $method = $_POST['method'];

    $insert = "INSERT INTO payments (order_id, customer_name, amount, method, status)
               VALUES ('$order_id', '$customer', '$amount', '$method', 'Paid')";

    if (mysqli_query($conn, $insert)) {
        $msg = "✅ Payment successful!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>💳 Payment - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>💳 Payment - TastyBites</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="order.php">Order</a>
    <a href="book_table.php">Book Table</a>
  </nav>
</header>

<form method="POST" class="container">
  <h2>Complete Your Payment</h2>

  <?php if(isset($msg)) echo "<p style='color:green;font-weight:600;'>$msg</p>"; ?>

  <label>Order ID</label>
  <select name="order_id" required>
    <option value="">Select Order</option>
    <?php
    $orders = mysqli_query($conn, "SELECT * FROM orders ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($orders)) {
        echo "<option value='{$row['id']}'>Order #{$row['id']} - {$row['customer_name']} ({$row['item']})</option>";
    }
    ?>
  </select>

  <input type="text" name="customer_name" placeholder="Customer Name" required>

  <input type="number" step="0.01" name="amount" placeholder="Amount (₹)" required>

  <label>Payment Method</label>
  <select name="method" required>
    <option value="Cash">Cash</option>
    <option value="Card">Card</option>
    <option value="UPI">UPI</option>
    <option value="NetBanking">Net Banking</option>
  </select>

  <button class="btn" name="pay">Pay Now</button>
</form>

<hr style="margin:2rem 0;">

<section class="container">
  <h2 style="width:100%;text-align:center;">💰 Recent Payments</h2>
  <table border="1" style="width:90%;margin:1rem auto;border-collapse:collapse;text-align:center;">
    <tr style="background:#ff512f;color:white;">
      <th>ID</th>
      <th>Order ID</th>
      <th>Customer</th>
      <th>Amount (₹)</th>
      <th>Method</th>
      <th>Status</th>
      <th>Date</th>
    </tr>

    <?php
    $query = "SELECT * FROM payments ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
              <td>{$row['id']}</td>
              <td>{$row['order_id']}</td>
              <td>{$row['customer_name']}</td>
              <td>₹{$row['amount']}</td>
              <td>{$row['method']}</td>
              <td>{$row['status']}</td>
              <td>{$row['created_at']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No payments yet.</td></tr>";
    }
    ?>
  </table>
</section>

</body>
</html>
