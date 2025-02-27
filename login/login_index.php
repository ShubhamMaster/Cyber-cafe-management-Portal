<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login_css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
</head>
<body>
   

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action = "authentication.php"  method = "POST" class="form-container">
<img src="../img/admin_logo.png" alt="admin_logo" class="admin_logo">


    <h1>Admin Login</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="btn">Login</button>
    <a href="index.php">
    <button type="button" class="btn cancel" >Close</button></a>
  </form>
</div>







</body>
</html>