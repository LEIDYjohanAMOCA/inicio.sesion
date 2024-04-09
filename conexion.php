<?php
// Definimos las credenciales de la base de datos
$servidor = "127.0.0.1"; // servidor de la base de datos
$usuario = "leidi"; // usuario de la base de datos
$contraseña = "536730morales"; // contraseña de la base de datos
$base_de_datos = "dbfomulario"; // nombre de la base de datos

// Creamos la conexión a la base de datos utilizando la función mysqli_conexionect
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);

// Verificamos si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error()); // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
}

// Cerramos la conexión a la base de datos utilizando la función mysqli_close
//mysqli_close($conexion);
?>
