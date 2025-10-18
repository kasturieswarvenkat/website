<?php
include('db.php');

if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$pass')";
  if (mysqli_query($conn, $query)) {
    header('Location: login.php');
  } else {
    $error = "Signup failed. Try again.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>🍽️ TastyBites</h1></header>

<form method="POST">
  <h2>Create Account</h2>
  <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button class="btn" name="signup">Sign Up</button>
  <p>Already have an account? <a href="login.php">Login</a></p>
</form>
</body>
</html>
