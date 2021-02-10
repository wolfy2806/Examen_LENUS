<?php 
require("bd/conexion.php");

$user = $_POST["usuario"];
$pass = md5($_POST['pass']);

$sql_usuario = "SELECT * FROM tbl_usuarios where Email = '".$user."'";
$result_usuario =  mysqli_query($conn, $sql_usuario);

if(mysqli_num_rows($result_usuario) > 0)
{
	$sql_usuario_val = "SELECT * FROM tbl_usuarios where Email = '".$user."' AND Password ='".$pass."'";
	$result_usuario_val =  mysqli_query($conn, $sql_usuario_val);

	$datos = mysqli_fetch_array($result_usuario_val);

	$userBD = $datos['Email'];
	$passBD = $datos['Password'];

	if($userBD == $user AND $passBD == $pass)
	{
		session_start();
		$_SESSION['usuario'] = $datos['Email'];
		$_SESSION['id_usuario'] = $datos['Id_usuario'];
		echo "";
	}
	else
	{	
		echo 1;
	}
}
else
{
	echo 2;
}
?>
