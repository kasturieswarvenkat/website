<?php
include('db.php');
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['user'] = $row['name'];
        header('Location: index.php');
    } else {
        $error = "Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - TastyBites</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>🍽️ TastyBites</h1></header>

<form method="POST">
  <h2>Login</h2>
  <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button class="btn" name="login">Login</button>
  <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</form>
</body>
</html>
