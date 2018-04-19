<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fakiwala.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="wrapper">

    <form class="form-signin" id="loginform" method="POST" autocomplete="off" action ="admin_login.php">
        <h2 class="form-signin-heading">Admin Login</h2>
        <div style="text-align: center;">
        <span style="color: red;"><strong><?php if(isset($_REQUEST['l'])) {
         echo "wrong credentials";
       } else { echo ""; }   ?></strong></span></div>
      
        <input type="text" class="form-control" name="uname" id = "uname"placeholder="Username" required="" autofocus=""  autocomplete="off" value=""/>
        <input type="password" class="form-control" name="pwd" id="pwd"placeholder="Password" style="margin-top:10px; margin-bottom:10px" required="" autocomplete="off"/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id ="login">Login</button>
    </form>
</div>
</body>
</html>