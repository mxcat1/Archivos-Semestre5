<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="js/validar.js"></script>
</head>

<body>
<form action="pagina2.php" method="post" name="form1" id="form1" onSubmit="return validarr();"/>
	<p> 
        Escribir de 2 a 3 letras en minúscula y sin vocales 
        <br><br>
        	<input type="text" name="txtminus" id="txtminus">
        <br>
    </p>
    <p>
    	<input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar"/>
    </p> 
</form>   
</body>
</html>
