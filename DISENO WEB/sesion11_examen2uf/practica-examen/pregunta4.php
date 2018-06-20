<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pregunta 1</title>
<script>
	function Verificar(){
		c=document.getElementById("txtbox").value;
		if(c=="" || /^\s+$/.test(c)){
			alert("Escriba un valor");
			return false
		}else{
			alert("Valor no válido");
			return false;
		}
		
		return true;
		
	}
</script>
</head>
<body>
<h1>Pregunta 1</h1>
<form action="p3_validado.php" method="post" onSubmit="return Verificar();"/>
<p>
<input type="text" id="txtbox" name="txtbox" value="Escriba la fecha"/>
<input type="submit" id="btnfec" name="btnfec" value="Ver"/>
</p>
</form>
</body>
</html>

