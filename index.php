<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MyApp</a>
      <div class="d-flex">
        <a href="login.php" class="btn btn-outline-light me-2">Login</a>
        <a href="register.php" class="btn btn-outline-light">Register</a>
      </div>
    </div>
  </nav>

  <!-- Centered Buttons -->
  <div class="d-flex vh-100 justify-content-center align-items-center">
    <div class="text-center">
      <h1 class="mb-4">Welcome to MyApp</h1>
      <a href="login.php" class="btn btn-primary btn-lg me-3">Login</a>
      <a href="register.php" class="btn btn-success btn-lg">Register</a>
    </div>
  </div>
</body>
</html>
