<?php 
require("bd/sesion.php");
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Examen LENUS</title>
    <link href="css/lite-purple.min.css" rel="stylesheet" />
    <link href="css/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">

        <?php 
            include 'estructura/header.php'; 
            include 'estructura/menu.php';
        ?>

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Cambiar Contraseña </h1>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <label> Contraseña Actual</label>
                        <input type="password" class="form-control" name="pass_actual" id= "pass_actual">                                                
                    </div>
                    <div class="col-md-6 text-center">
                        <label> Contraseña Nueva</label>
                        <input type="password" class="form-control" name="pass_nueva" id= "pass_nueva">                                                
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-md-12 text-center">
                        <buttom type="button" id="Cambiar" onclick="cambiar();" class="btn btn-primary ml-2"> Guardar </buttom>
                    </div>
                </div>
            </div>     
        </div>
    </div>
    <!-- Script -->
     <script src="js/jquery.min.js"></script>     
     <script src="js/jquery-1.9.1.min.js"></script>
     <script src="js/valpass.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/script.min.js"></script>
    <script src="js/sidebar.large.script.min.js"></script>
</body>
</html>