<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script>

</script>
</head>

<body>
<h1>Pregunta 3</h1>

<form action="paginaValidada.php" method="post" name="form1" id="form1" onSubmit="return validar();" >

	<p>Haga CHECK en 2 opciones de GRUPO 1: <BR>
    <input type="checkbox" name="chkGrupo1[]" id="chkGrupo1" value="op1" /> Selecione opción 1<br>
    <input type="checkbox" name="chkGrupo1[]" id="chkGrupo1" value="op2" /> Selecione opción 2<br>
    <input type="checkbox" name="chkGrupo1[]" id="chkGrupo1" value="op3" /> Selecione opción 3<br>
    <input type="checkbox" name="chkGrupo1[]" id="chkGrupo1" value="op4" /> Selecione opción 4<br>
    <input type="checkbox" name="chkGrupo1[]" id="chkGrupo1" value="op5" /> Selecione opción 5<br>
    </p>

	<p>Haga CHECK en 2 opciones de GRUPO 2: <BR>
    <input type="checkbox" name="chkGrupo2[]" id="chkGrupo2" value="1" /> Grupo2. Opción 1<br>
    <input type="checkbox" name="chkGrupo2[]" id="chkGrupo2" value="2" /> Grupo2. Opción 2<br>
    <input type="checkbox" name="chkGrupo2[]" id="chkGrupo2" value="3" /> Grupo2. Opción 3<br>
    <input type="checkbox" name="chkGrupo2[]" id="chkGrupo2" value="4" /> Grupo2. Opción 4<br>
    <input type="checkbox" name="chkGrupo2[]" id="chkGrupo2" value="5" /> Grupo2. Opción 5<br>
    </p>

	<p><input type="submit" name="btnEnviar" id="btnEnviar" /> </p>


</form>

</body>
</html>
