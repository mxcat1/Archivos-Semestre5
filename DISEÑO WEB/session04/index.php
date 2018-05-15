<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Java Script</title>
</head>

<body background="img/Penguins.jpg">
    <h1>Validacion</h1>
	<form action="pagina2.php" method="post" name="form1" onsubmit="return validar()">
        <label for="txtNombre">Valor: </label>
<!--        <input type="text" name="txtNombres" id="txtNombre">-->
<!--        <br><br>-->
<!--        <input type="button" name="btnEnviar" value="ver" onclick="verificarForm()">-->
        <input type="text" name="txtValor" id="txtValor" value="">
        <br>
        <select name="anho" id="anho">
            <option value="">Seleccione</option>
            <script>
                let anho=1700

                for (i=1700;i<2019;i++){
                    document.write("<option value='+ i +'>"+ i +"</option>")
                }

            </script>

        </select>
        <br>
        <input type="file" name="flArchivo" id="flArchivo">
        <br>
        <input type="date" name="dtFecha" id="dtFecha">
        <br>
        <input type="submit" name="btnEnviar" value="ver" >
    </form>
    <br>
    <table width="200" border="1">
        <tr>
            <td>F1C1</td>
            <td>Foto</td>
            <td colspan="3">Datos Personales</td>

        </tr>
        <tr>
            <td>F2C1</td>
            <td rowspan="3">F2C2</td>
            <td>F2C3</td>
            <td>F2C4</td>
            <td>F2C5</td>
        </tr>
        <tr>
            <td>F3C1</td>
            <td>F3C3</td>
            <td>F3C4</td>
            <td>F3C5</td>
        </tr>
        <tr>
            <td>F4C1</td>
            <td>F4C3</td>
            <td>F4C4</td>
            <td>F4C5</td>
        </tr>

    </table>
</body>
</html>