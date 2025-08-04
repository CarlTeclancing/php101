<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
    }

    .navbar {
      background-color: #2c3e50;
      padding: 1em;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h1 {
      margin: 0;
      font-size: 24px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
    }

    .container {
      padding: 2em;
    }

    .card {
      background-color: white;
      padding: 2em;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      margin: auto;
    }

    .card h2 {
      margin-top: 0;
      color: #333;
    }

    .info {
      margin: 1em 0;
    }

    .info strong {
      color: #555;
    }

    .footer {
      margin-top: 40px;
      text-align: center;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h1>My Dashboard</h1>
    <div>
      <a href="#">Profile</a>
      <a href="#">Settings</a>
      <a href="../auth/auth.logout.php">Logout</a>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <h2>Welcome, <?= $_SESSION['user_name'] ?>!</h2>
      <div class="info">
        <p><strong>Email:</strong> <?= $_SESSION['user_email'] ?></p>
        <p><strong>User ID:</strong> <?= $_SESSION['user_id'] ?></p>
      </div>
    </div>

    <div class="footer">
      &copy; 2025 My Dashboard App. All rights reserved.
    </div>
  </div>

</body>
</html>
