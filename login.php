
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
 <div class="header">
 	<h2>Register</h2>
 </div> 	
 	<form method="POST" action="login.php">
 		<div class="input-group">
 			<label>Username</label>
 			<input type="text" name="username">
 		</div>
 	    <div class="input-group">
 			<label>Password</label>
 			<input type="password" name="password_1">
 		</div>
 		
 		<div class="input-group">
 			
 			<button type="submit" name="login" class="btn">login</button>
 		</div>
 		<P>
 			Not yet a member ? <a href="register.php">Sign up</a>
 		</P>
 	</form>

</body>
</html>