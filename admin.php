<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1>👨‍💼 Admin Dashboard</h1>
  <nav>
    <a href="index.php">Home</a>
    <a href="staff.php">Staff</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>

<section class="container">
  <div class="card">
    <h3>📦 Total Orders</h3>
    <p>128</p>
  </div>
  <div class="card">
    <h3>🪑 Table Bookings</h3>
    <p>45</p>
  </div>
  <div class="card">
    <h3>👥 Registered Users</h3>
    <p>230</p>
  </div>
  <div class="card">
    <h3>💰 Today's Revenue</h3>
    <p>₹18,540</p>
  </div>
</section>

<section style="text-align:center;margin:2rem;">
  <button class="btn" onclick="window.location='menu.php'">Manage Menu</button>
  <button class="btn" onclick="window.location='staff.php'">Manage Staff</button>
</section>

</body>
</html>
