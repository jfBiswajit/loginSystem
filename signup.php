<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="asset/style/style.css">
  <title>Signup</title>
</head>
<body>
<form action="action_page.php">
  <div class="container">
    <h1>Sign Up</h1>

    <label for="text"><b>First Name</b></label>
    <input type="text" placeholder="Enter Firstname" name="first_name" required>
    <label for="text"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Firstname" name="last_name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn" name= 'submit'>Sign Up</button>
    </div>
    <p>Allready have an account? <a href="signin.php">login</a></p>
  </div>
</form>
</body>
</html>