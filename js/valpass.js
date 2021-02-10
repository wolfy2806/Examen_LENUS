function cambiar()
{
	var pass_actual = document.getElementById("pass_actual").value;
    var pass_nueva = document.getElementById("pass_nueva").value;
    var ban = 0;

    if(pass_actual != "")
    {
    	if(pass_nueva != "")
	    {
	    	$.ajax({
				type: 'POST',
				url: 'valpass.php',		
				data: {pass_actual:pass_actual, pass_nueva:pass_nueva}
			})
			.done(function(r)
			{
				if (r == 1) 
				{
					alert ('La contraseña anterior no coincide');
				}
				else
				{
					alert ('La contraseña a sido cambiada correctamente');
					window.location.href = 'cambiar_pass.php'
				}
			});
	    }
	    else
	    {
	    	alert ('Debe ingresar su contraseña nueva');
	    }
    }
    else
    {
    	alert ('Debe ingresar su su contraseña anterior');
    }
}