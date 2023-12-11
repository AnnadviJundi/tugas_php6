<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-container {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
  <title>Your Form Card</title>
</head>
<body>

<div class="card-container">
  <?php
  $usernameErr = $passwordErr = $loginErr = "";
  $username = $password = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $usernameErr = "Username is required";
    } else {
      $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $password = test_input($_POST["password"]);
    }

    // Memanggil fungsi otentifikasi
    if (!empty($username) && !empty($password)) {
      if (!otentifikasi($username, $password)) {
        $loginErr = "Invalid username or password";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function otentifikasi($uname, $pass) {
    if ($uname == "admin" && $pass == "123456") {
      return true;
    } else {
      return false;
    }
  }
  ?>
    <h2>Login Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
      <span class="text-danger"><?php echo $usernameErr; ?></span>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <span class="text-danger"><?php echo $passwordErr; ?></span>
    </div>
    <div class="form-group d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <span class="text-danger"><?php echo $loginErr; ?></span>
  </form>

  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (otentifikasi($username, $password)) {
      echo "<p class='text-success'>Login successful. Welcome, $username!</p>";
    }
  }
  ?>
</div>

</body>
</html>
