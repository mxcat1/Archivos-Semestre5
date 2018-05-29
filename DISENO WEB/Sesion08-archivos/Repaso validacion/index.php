<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Validacion Parte2</title>
    <script src="js/validarform.js">
        // function validar() {
        //     let texto= document.getElementById("txtValor").value
        //     if (texto == ""){
        //         alert("No hay texot")
        //         return false
        //
        //     }
        //     return true
        // }
    </script>
</head>
<body>
<H1>Validacion Segunda Parte</H1>
    <form action="Pagina2.php" method="post" name="form1" id="form1" onsubmit="return validar()">
        <label for="txtValor">Escriba: </label>
        <input type="text" name="txtValor" id="txtValor">
        <br><br>

        <label for="txtnumeros">Numeros: </label>
        <input type="text" name="txtnumeros" id="txtnumeros">
        <br><br>

        <label for="chkcheck">Marque un Check en todos</label>
        <input type="checkbox" name="chkcheck" id="chkcheck" value="SI">
        <br><br>

        <label for="chkTodos">Marque check en todos</label>
        <br>
        <input type="checkbox" name="chkTodos" id="chkTodos1" value="op1">
        <label for="chkTodos1">Opcion1</label>
        <br>
        <input type="checkbox" name="chkTodos" id="chkTodos2" value="op2">
        <label for="chkTodos2">Opcion2</label>
        <br>
        <input type="checkbox" name="chkTodos" id="chkTodos3" value="op3">
        <label for="chkTodos3">Opcion3</label>
        <br>
        <input type="checkbox" name="chkTodos" id="chkTodos4" value="op4">
        <label for="chkTodos4">Opcion4</label>
        <br>
        <input type="checkbox" name="chkTodos" id="chkTodos5" value="op5">
        <label for="chkTodos5">Opcion5</label>
        <br>
        <br>
        <input type="radio" name="rbopcion" id="rbopcion1" value="Mañana">
        <label for="rbopcion1">Mañana</label>
        <br>
        <input type="radio" name="rbopcion" id="rbopcion2" value="Tarde">
        <label for="rbopcion2">Tarde</label>
        <br>
        <input type="radio" name="rbopcion" id="rbopcion3" value="Noche">
        <label for="rbopcion3">Noche</label>
        <br>
        <input name="btnenviar" id="btnEnviar" type="submit" value="Enviar">
        <br>
        <br>
<!--        Boton con css-->
<!--        <div id="boton1">-->
<!--            <p>Enviar</p>-->
<!--        </div>-->
    </form>
</body>
</html>