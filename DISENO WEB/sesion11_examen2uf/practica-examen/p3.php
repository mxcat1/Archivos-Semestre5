<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Validacion_2</title>
<script src="js/validarForms.js"></script>
<script>
	function Validar(){
	//Lectura de un formulario
	f=document.getElementById("form1");
	i=0;
	k=0;
	while(i<f.elements.length){
		//Lectura de cada elemento
		var e=f.elements[i];
		if(e.type=="checkbox"){
			if(e.name=="chkBox[]" && e.checked){
				k++;
			}
		}
		i++;
	}
	
	if(k>3 || k<3){
		alert("Caillas seleccionadas : "+k);
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
    <p>Haga check en todos:<br>
    <input type="checkbox" name="chkBox[]" id="chkBox[]" value="Op1">Opcion 1</p>
    <input type="checkbox" name="chkBox[]" id="chkBox[]" value="Op2">Opcion 2</p>
    <input type="checkbox" name="chkBox[]" id="chkBox[]" value="Op3">Opcion 3</p>
    <input type="checkbox" name="chkBox[]" id="chkBox[]" value="Op4">Opcion 4</p>
    <input type="checkbox" name="chkBox[]" id="chkBox[]" value="Op5">Opcion 5</p>
    <p><input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar"></p>
</form>
</body>
</html>
