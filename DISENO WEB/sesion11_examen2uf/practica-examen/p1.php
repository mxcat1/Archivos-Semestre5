<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pregunta 1</title>
<script>
	function Verificar(){
		/*alert("Soy una funcion.");*/
        c=document.getElementById("txtbox").value;
        d=document.getElementById("btnfec").value;
        /*alert("xxx "+c+" "+d);*/
        txtbox.value=d;
        btnfec.value=c;
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
