
<?php
$connection = mysqli_connect("localhost", "root", "", "ajveladoras");
$connection -> set_charset("utf8");

session_start();


if ($connection->connect_error) {
    die("Error de conexion a la base de datos: " . $connection->connect_error);
}

//Regiter 

// Procesar el formulario de registro cuando se env�a
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT id FROM users WHERE user = '$user'";
    $result = $connection->query($sql);

    $sql2 = "SELECT id FROM users WHERE email = '$email'";
    $result2 = $connection->query($sql2);

    if ($result ->num_rows >0) {
        // El usuario ya existe
        $error = "El usuario ya esta registrado. Por favor, elige otro nombre de usuario.";
        
    }if ($result2 ->num_rows >0) {
        //El email ya existe
        $error = "El enail ya esta registrado";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO users (name, lastname, user, password, email) VALUES ('$name', '$lastname', '$user', '$password', '$email')";
        if ($connection->query($sql) === TRUE) {
            // Registro exitoso, redirigir al usuario a la p�gina de inicio de sesi�n
            header("Location: login.php");
            exit;
        } else {
            // Error al insertar en la base de datos
            $error = "Error al registrar al usuario. Intantalo nuevamente.";
        }
    }
}


$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="images/AJ-logo-ico.png" type="image/x-icon">
    <title>Sing Up</title>
</head>
<body class="bodylogRe">


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
