<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 17/04/2018
 * Time: 10:16
 */ echo "Hola mundo";?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js1.js"></script>
</head>
<body>
<form action="list.php?valor=2&otro='Hola'" method="post">
    <p>Formulario 1</p>
    <input type="text" name="txtnombre" id="name">
    <input type="submit" value="Enviar" name="btnenviar" onclick="imprimir();">
    <input type="datetime-local" name="cale" id="cal">
    <br>
    <input type="file" name="archivo" id="">
</form>

</body>
</html>
