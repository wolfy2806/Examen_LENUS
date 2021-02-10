function acceso()
{
	var usuario = document.getElementById("usuario").value;
    var pass = document.getElementById("pass").value;
    var ban = 0;

    if(usuario != "")
    {
    	if(pass != "")
	    {
	    	$.ajax({
				type: 'POST',
				url: 'vallogin.php',		
				data: {usuario:usuario, pass:pass}
			})
			.done(function(r)
			{
				if (r == 1) 
				{
					alert ('Datos Incorrectos');
				} 
				else if (r == 2) 
				{
					alert ('El usuario no se encuentra registrado');
				}
				else if (r == 3) 
				{
					alert("Ha ocurrido un error");
				}
				else
				{
					window.location.href = 'principal.php'
				}
			});
	    }
	    else
	    {
	    	alert ('Debe ingresar su contraseña');
	    }
    }
    else
    {
    	alert ('Debe ingresar su usuario');
    }


	


}
