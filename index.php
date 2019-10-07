<?php
  session_start();
  if (!isset($_SESSION['isLogin'])) {
    header('location: signin.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="asset/img/DEV.png" type="image/x-icon">
  <link rel="stylesheet" href="asset/style/style.css">
  <title>DEV</title>
</head>

<body>
  <header class="container">
    <h1>Tester</h1>
  </header>

  <section class="message container">
    <p>Hello: Biswajit</p>
    <p>last name: Biswas</p>
    <p>Email: <?php echo $_SESSION['email'] ?></p>
    <p>Registration on: 7-10-19</p>
    <a href="logout.php">Logout</a>
  </section>
  <script src="asset/js/app.js"></script>
</body>

</html>