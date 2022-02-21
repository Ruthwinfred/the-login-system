<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="username" placeholder="enter username" >
  	</div>
  	<div class="input-group">
  		<input type="password" name="password" placeholder="Enter password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
      
      <p><a href="enter_email.php">Forgot your password?</a></p>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
     
  </form>
</body>
</html>