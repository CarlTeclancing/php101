<?php
require ('./auth/auth.register.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    span{
        color:red;
    }
  </style>
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center mb-4">Register</h3>
            <form method="POST" action="./auth/auth.register.php">
              <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" >
                <span class="color:red;"><?= $nameErr ?></span>
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" >
                <span class="color:red;"><?= $emailErr ?></span>
              </div>
              <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" >
                <span class="color:red;"><?= $passwordErrr ?></span>
              </div>
              <button type="submit" class="btn btn-success w-100">Register</button>
              <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
