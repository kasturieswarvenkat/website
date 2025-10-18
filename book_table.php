<?php
include('db.php');

// Handle table booking form
if (isset($_POST['book'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $notes = $_POST['notes'];

    $insert = "INSERT INTO tables_booking (name, phone, date, time, guests, notes)
               VALUES ('$name', '$phone', '$date', '$time', '$guests', '$notes')";
    if (mysqli_query($conn, $insert)) {
        $msg = "✅ Table booked successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🍷 Book a Table - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>🍴 TastyBites</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="order.php">Order</a>
    <a href="payment.php">Payment</a>
  </nav>
</header>

<form method="POST" class="container">
  <h2>🪑 Reserve Your Table</h2>

  <?php if(isset($msg)) echo "<p style='color:green;font-weight:600;'>$msg</p>"; ?>

  <input type="text" name="name" placeholder="Your Name" required>
  <input type="text" name="phone" placeholder="Phone Number" required>
  <input type="date" name="date" required>
  <input type="time" name="time" required>
  <input type="number" name="guests" placeholder="No. of Guests" required>
  <textarea name="notes" placeholder="Any special request (optional)"></textarea>

  <button class="btn" name="book">Book Table</button>
</form>

<hr style="margin:2rem 0;">

<section class="container">
  <h2 style="width:100%;text-align:center;">📋 Recent Bookings</h2>
  <table border="1" style="width:90%;margin:1rem auto;border-collapse:collapse;text-align:center;">
    <tr style="background:#ff512f;color:white;">
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Date</th>
      <th>Time</th>
      <th>Guests</th>
      <th>Notes</th>
      <th>Booked At</th>
    </tr>

    <?php
    $query = "SELECT * FROM tables_booking ORDER BY created_at DESC";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
              <td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['date']}</td>
              <td>{$row['time']}</td>
              <td>{$row['guests']}</td>
              <td>{$row['notes']}</td>
              <td>{$row['created_at']}</td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No bookings yet.</td></tr>";
    }
    ?>
  </table>
</section>

</body>
</html>
