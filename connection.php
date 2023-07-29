<?php
$connection = mysqli_connect("localhost", "root", "", "ajveladoras");
$connection -> set_charset("utf8");

session_start();


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

//Regiter 

// Procesar el formulario de registro cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT id FROM users WHERE user = '$user'";
    $result = $conn->query($sql);

    $sql2 = "SELECT id FROM users WHERE email = '$email'";
    $result2 = $conn->query($sql2);

    if ($result ->num_rows >0) {
        // El usuario ya existe
        $error = "El usuario ya está registrado. Por favor, elige otro nombre de usuario.";
        
    }if ($result2 ->num_rows >0) {
        //El email ya existe
        $error = "El enail ya esta registrado";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $sql = "INSERT INTO users (name, lastname, user, password, email) VALUES ('$name', '$lastname', '$user', '$password', '$email')";
        if ($conn->query($sql) === TRUE) {
            // Registro exitoso, redirigir al usuario a la página de inicio de sesión
            header("Location: login.php");
            exit;
        } else {
            // Error al insertar en la base de datos
            $error = "Error al registrar al usuario. Inténtalo nuevamente.";
        }
    }
}


$conn->close();
?>