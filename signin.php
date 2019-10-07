<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="asset/style/style.css">
  <title>Signin</title>
</head>
<body>
<form method="post">
  <div class="imgcontainer">
    <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" name='submit'>Login</button>
    <p>Don't have an account? <a href="signup.php">Create one</a></p>
  </div>

</form>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['isLogin'] = true;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    if (isset($_SESSION['isLogin'])) {
      header('location: index.php');
      die();
    }
  }
?>
</body>
</html>