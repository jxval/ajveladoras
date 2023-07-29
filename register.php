
<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <title>Sing Up</title>
</head>
<body>


<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post" action="">
<div class="login-wrap reg">
	<div class="login-html reg">
    <h2 class="h2sing-in-up ">Sing Up</h2>
		<div class="login-form">
				<div class="group">
					<label for="nombre" class="label">Name</label>
					<input type="text" id="nombre" name="name" required class="input">
				</div>
				<div class="group">
					<label for="apellido" class="label">Lastname</label>
					<input type="text" id="apellido" name="lastname" required class="input" >
				</div>
                <div class="group">
					<label for="usuario" class="label">Username</label>
					<input  type="text" id="usuario" name="user" required class="input">
				</div>
				<div class="group">
					<label for="contrasena" class="label">Password</label>
					<input type="password" id="contrasena" name="password" required class="input" >
				</div>
				<div class="group">
					<label for="email" class="label">Email </label>
					<input type="email" id="email" name="email" required class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
		</div>
	</div>
</div>
</form>

</body>
</html>
