<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pregunta 1</title>
<script>
	function Verificar(){
		c=document.getElementById("txtbox").value;
		d=document.getElementById("btnfec").value;
		//[1-9] Del 1 al 9
		//|[12][0-9] Primer digito 1 o 2, segundo digito de 0 a 9
		//|3[01] Primer digito 3, segundo digito 0 o 1
		if(/^([1-9]|[12][0-9]|3[01])\*([1-9]|1[0-2])\*([1-9]|[12][0-9][0-9][0-9]|3[01])$/.test(c)){
			btnfec.value="Correcto";
			btnfec.style.borderColor="green";	
		}else{
			btnfec.value="Datos incorrectos";
			btnfec.style.borderColor="red";	
		}

		
	}
</script>
</head>
<body>
<h1>Pregunta 1</h1>
<form action="pagina2.php">
<p>
<input type="text" id="txtbox" name="txtbox" value="Escriba la fecha"/>
<input type="button" id="btnfec" name="btnfec" value="Ver" onClick="Verificar();"/>
</p>
</form>
</body>
</html>
