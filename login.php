<?php
session_start(); // MUST be first

require_once("config.php"); // db connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare statement to avoid SQL injection
    $sql = "SELECT id, username, password FROM tbluser WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify password (assuming it's hashed)
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("Location: welcome.php");
            exit;
        } else {
            header("Location: fail.html"); // wrong password
            exit;
        }
    } else {
        header("Location: fail.html"); // user not found
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
 body {
       background-color: #dfe2e7;
    }
    .log { 
  background-color: #dfe2e7;
  display: flex;
justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
    }
    .register-right{
        justify-content: center;
      color:#18171d;
      background-color: #dfe2e7;
      border:0; 
      box-shadow: 5px 5px 5px 5px #888888;
      border-radius:20px;
      padding: 40px;
      max-width: 400px;
      margin: 100px;
      height: 70vh;
    }
   input[type="text"], input[type="password"] {
  width: 90%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

    input[type="submit"] {
      background-color:#2664a1; 
      border:solid #345ca5;
      border-radius: 20px;
      color: white;
      padding: 10px 20px;
      cursor: pointer;
    }
    label {
      color:#18171d;
      font-family: 'Courier New', Courier, monospace;
    }
    .how {
      text-transform: uppercase;
      text-decoration:underline;
      font-size: xx-large;
      text-align: center;
    }
    a {
      color:#000000;
    }
</style>
</head>
<link rel="stylesheet" href="style.css">
<body>
<div class="log">
  <div class="register-right">
    <h2 class="how">Login</h2>
    <form method="post" action="login.php">
      <input name="username" type="text" placeholder="Enter your Username" required />
      <label>USERNAME</label>
      <input name="password" type="password" placeholder="Enter your Password" required />
      <label>PASSWORD</label>
      <input type="submit" value="Login" />
    </form>
    <p>Don't have an Account? <a href="signin.php">Create Account</a></p>
  </div>
</div>
</body>
</html>
