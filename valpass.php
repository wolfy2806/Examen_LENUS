<?php 
require("bd/sesion.php");

$pass_actual = md5($_POST['pass_actual']);
$pass_nueva = md5($_POST['pass_nueva']);

$sql_usuario = "SELECT * FROM tbl_usuarios where Email = '".$email."' AND Password = '".$pass_actual."'";
$result_usuario =  mysqli_query($conn, $sql_usuario);

if(mysqli_num_rows($result_usuario) > 0)
{
	$actualiza_usuario = "UPDATE tbl_usuarios SET Password= '".$pass_nueva."' WHERE Email = '".$email."'";
	mysqli_query($conn, $actualiza_usuario);
	echo "";
}
else
{
	echo 1;
}
?>
