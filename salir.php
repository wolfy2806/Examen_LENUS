<?php 
require("bd/sesion.php");
session_destroy();
header("location: index.php");
?>
