<?php
session_start();

if (isset($_SESSION['usuario']))
{
	require("bd/conexion.php");
	$email =$_SESSION['usuario'];
	$id_usuario=$_SESSION['id_usuario'];
}

?>