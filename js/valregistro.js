function registrar()
{
	var ban = 0;

	if($("#nombre").val()!="" && $("#apellidop").val()!="" && $("#apellidom").val()!="" && $("#correo").val()!="" && $("#passw").val()!="")
	{
			if(validarEmail($("#correo").val()))
			{
				ban = 1;
			}
			else
			{
				ban = 0;
				alert("Por favor ingresa un correo valido");
				$("#correo").focus();
			}
	}
	else
	{    
	
		if($("#nombre").val()=="")
		{	
			alert("Debe capturar el nombre");
			$("#nombre").focus();
		}
		else if($("#apellidop").val()=="")
		{
			alert("Debe capturar el apellido paterno");
			$("#apellidop").focus();
		}
		else if($("#apellidom").val()=="")
		{
			alert("Debe capturar el apellido materno");
			$("#apellidom").focus();
		}
		else if($("#correo").val()=="")
		{
			alert("Debe proporcionar el correo electrónico");
			$("#correo").focus();
		}
		else if($("#passw").val()=="")
		{
			alert("Debe ingresar una contraseña");
			$("#confemail").focus();
		}
	}

	if(ban ==1)
	{
		inserta()
	}
}

function inserta()
{
	var datos = $('#registro').serialize();
	$.ajax({
			type:'POST',
			url:'registro.php',
			data:{nombre:$("#nombre").val(), apellidop:$("#apellidop").val(), apellidom:$("#apellidom").val(), email:$("#correo").val(), pass:$("#passw").val()}	
		}).done(function(r)
		{
				if (r == 1) 
				{
					alert ('El usuario ya esta registrado');
				} 
				else  
				{
					alert("Usuario registrado con exito");
					window.location.href = 'index.php';
				}
			});
}

function validarEmail(email)
 {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

