<?php
session_start();
include "dbcon.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // FOR SCHOOL USE ONLY — plaintext password check
    if ($password === $user['password']) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['username'] = $user['fullname']; // assuming 'fullname' field
      $_SESSION['role'] = $user['role'] ?? 'student';

      if ($_SESSION['role'] === 'admin') {
        header("Location: admin/dashboard.php");
      } else {
        header("Location: student/dashboard.php");
      }
      exit;
    } else {
      $error = "Incorrect password.";
    }
  } else {
    $error = "Email not found.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | Digital Library</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f4f0;
      display: flex;
      height: 100vh;
    }

    .login-container {
      display: flex;
      width: 100%;
    }

    .login-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f4f0;
      padding: 40px;
    }

    .login-image img {
      max-width: 120%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      flex: 1;
      background-color: #f8f4f0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 0 80px;
    }

    .login-form h1 {
      font-family: 'Libre Baskerville', serif;
      font-size: 2.5rem;
      margin-bottom: 10px;  
    }

    .login-form p {
      margin-bottom: 30px;
      color: #666;   
    }

    .login-form input {
      width: 100%;
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid #000000;
      border-radius: 8px;
      font-size: 1rem;
    }

    .login-form a {
      text-decoration: none;
      font-size: 0.9rem;
      color: #0077cc;
    }

    .login-form button {
      background-color: #1f3556;
      color: white;
      border: none;
      padding: 15px;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      display: block;
      margin: 15px auto 0;
    }

    .divider {
      text-align: center;
      margin: 30px 0 20px;
      position: relative;
    }

    .divider::before,
    .divider::after {
      content: '';
      position: absolute;
      top: 50%;
      width: 45%;
      height: 1px;
      background-color: #F1EFEC;
    }

    .divider::before {
      left: 0;
    }

    .divider::after {
      right: 0;
    }

    .divider span {
      padding: 0 10px;
      background-color: #fff;
      color: #888;
    }

    .google-login {
      text-align: center;
      margin-top: 10px;
    }

    .google-login img {
      width: 30px;
      cursor: pointer;
    }

    .error {
      color: red;
      margin-bottom: 15px;
      text-align: center;
      font-size: 0.95rem;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <!-- Left Side Image -->
    <div class="login-image">
      <img src="Images/login.png" alt="Login" />
    </div>

    <!-- Right Side Form -->
    <div class="login-form">
      <h1>Welcome Back!</h1>
      <p>Don't have an account? <a href="#">Sign Up</a></p>

      <?php if (!empty($error)): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <a href="#">Forgot your password?</a>
        <button type="submit">Sign In</button>
      </form>

      <div class="divider"><span>or continue with</span></div>

      <div class="google-login">
        <img src="Images/google.png" alt="Google Sign In" />
      </div>
    </div>
  </div>

</body>
</html>
