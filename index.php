<?php include('server.php'); ?>
<html>
<head>
	<title>Registration system</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
 <div class="header">
 	<h2>Home page</h2>
 </div> 	
 	<div class="content">
 		<?php if(isset($_SESSION['success'])): ?>
 			<div class="error success">
 				<h3>
 					<?php echo $_SESSION['success'];
 					unset($_SESSION['success']);
 					?>
 				</h3>
 			</div>
 			<?php if (isset($_SESSION["username"])) ?> 
 				<p>welcome<strong> <?php echo $_SESSION['username']; ?></strong></p>
 				<p><a href="index.php?logout= '1'"></a>Logout</p>

 			<?php endif; ?>
 	</div>

</body>
</html>