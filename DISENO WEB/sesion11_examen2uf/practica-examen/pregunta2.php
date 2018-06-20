<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Validacion_2</title>
<script src="js/validarForms.js"></script>
<script>
	function Validar(){
	//Lectura al elemento
	ePref=document.getElementsByName("chkPref[]");
	i=0;
	k=0;
	while(i<ePref.length){
		//Lectura de cada elemento
			if(ePref[i].checked){
				k++;
			}
		i++;
	}
	
	if(k!=3){
		alert("Preferencias seleccionadas : "+k);
		alert("Debes marcar 3 casillas.");
		return false;
	}
	
	eCuen=document.getElementsByName("chkCuen[]");
	i=0;
	k=0;
	while(i<eCuen.length){
		//Lectura de cada elemento
			if(eCuen[i].checked){
				k++;
			}
		i++;
	}
	
	if(k!=3){
		alert("Cuentas seleccionadas : "+k);
		alert("Debes marcar 3 casillas.");
		return false;
	}
	
	return true;
}
</script>
</head>

<body>
<h1>Validacion Segunda Parte</h1>
<form action="p3_validado.php" name="form1" id="form1" method="post" onSubmit="return Validar();">
    <p>Preferencias:<br>
    <input type="checkbox" name="chkPref[]" id="chkPref[]" value="Op1">Opcion 1</p>
    <input type="checkbox" name="chkPref[]" id="chkPref[]" value="Op2">Opcion 2</p>
    <input type="checkbox" name="chkPref[]" id="chkPref[]" value="Op3">Opcion 3</p>
    <input type="checkbox" name="chkPref[]" id="chkPref[]" value="Op4">Opcion 4</p>
    <input type="checkbox" name="chkPref[]" id="chkPref[]" value="Op5">Opcion 5</p>
    <p>Cuentas:<br>
    <input type="checkbox" name="chkCuen[]" id="chkCuen[]" value="Op1">Opcion 1</p>
    <input type="checkbox" name="chkCuen[]" id="chkCuen[]" value="Op2">Opcion 2</p>
    <input type="checkbox" name="chkCuen[]" id="chkCuen[]" value="Op3">Opcion 3</p>
    <input type="checkbox" name="chkCuen[]" id="chkCuen[]" value="Op4">Opcion 4</p>
    <input type="checkbox" name="chkCuen[]" id="chkCuen[]" value="Op5">Opcion 5</p>
    <p><input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar"></p>
</form>
</body>
</html>
