<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen LENUS</title>  
    <!--Css--> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-extras.css">
    <!-- Script -->
     <script src="js/jquery.min.js"></script>     
     <script src="js/jquery-1.9.1.min.js"></script>
</head>

<body>
     <div class="wrapper">
        <div class="content" id="contenedor-login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                      <h2>Acceso</h2>                      
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <label>Usuario</label>
                                    <input type="email" id="usuario" name="usuario" class="form-control" required>
                                </div>
                                <div class="col-md-6 text-center">
                                    <label>Contraseña</label>
                                    <input type="password" id="pass" name="pass" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <buttom type="button" onclick="acceso();" class="btn btn-primary ml-2"> Ingresar </buttom>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <buttom  id="registrar"  class="btn btn-primary ml-2"> Registrarse </buttom>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        
        <script src="js/vallogin.js"></script> 

        <div class="content" id="contenedor-registro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                      <h2>Registro</h2>
                      <span class="close-btn"> X </span>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <label>Nombre(s)</label>
                                    <input type="text" name="nombre" id= "nombre" class="form-control capitalize" required>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label>Apellido Paterno</label>
                                    <input type="text" name="apellidop" id="apellidop" class="form-control capitalize" required>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label>Apellido Materno</label>
                                    <input type="text" name="apellidom" id="apellidom" class="form-control capitalize" required>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label>Email</label>
                                    <input type="email" id="correo" name="correo" class="form-control" required>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label>Contraseña</label>
                                    <input type="password" id="passw" name="passw" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <buttom type="button" id="registrar" onclick="registrar();" class="btn btn-primary ml-2"> Guardar </buttom>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>        
     </div>
     <!-- Script -->
     <script src="js/login.js"></script>     
     <script src="js/valregistro.js"></script>
     
     
</body>
</html>
