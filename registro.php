<?php 
require("bd/conexion.php");

$nombre = $_POST["nombre"];
$apellidop = $_POST["apellidop"];
$apellidom = $_POST["apellidom"];
$email = $_POST["email"];
$pass = md5($_POST['pass']);

$sql_usuario = "SELECT * FROM tbl_usuarios where Email = '".$user."'";
$result_usuario =  mysqli_query($conn, $sql_usuario);

if(mysqli_num_rows($result_usuario) > 0)
{
	echo 1;
}
else
{
	$inserta_usuario = "INSERT INTO tbl_usuarios(Nombre, Apellido_paterno, Apellido_materno, Email, Password) VALUES ('$nombre', '$apellidop', '$apellidom', '$email', '$pass')";
	mysqli_query($conn, $inserta_usuario);
	echo 2;
}
?>