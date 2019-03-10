<?php include('server.php'); ?>
<html>
<head>
	<title>Registration system</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
 <div class="header">
 	<h2>Register</h2>
 </div> 	
 	<form method="POST" action="register.php">
 		<!-- //display validation --> 
 		<?php include('errors.php'); ?>
 		<div class="input-group">
 			<label>Username</label>
 			<input type="text" name="username" value="<?php echo $username;?>">
 		</div>
 		<div class="input-group">
 			<label>Email</label>
 			<input type="text" name="email" value="<?php echo $email;?>>
 		</div>
 		<div class="input-group">
 			<label>Password</label>
 			<input type="password" name="password_1">
 		</div>
 		<div class="input-group">
 			<label>Confirm Password</label>
 			<input type="password" name="password_2">
 		</div>
 		<div class="input-group">
 			
 			<button type="submit" name="Register" class="btn">REGISTER</button>
 		</div>
 		<P>
 			Already a member ? <a href="login.php">Sign in</a>
 		</P>
 	</form>

</body>
</html>