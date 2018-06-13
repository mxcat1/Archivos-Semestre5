<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/script.js"></script>
</head>
<body>
<form action="pagina2.php" method="post" onsubmit="return verificar()" id="form1">
    <label for=""><h1>preferencias</h1></label><br>
    <input type="checkbox" name="chkprefe[]" id="chkprefe1" value="Musica">
    <label for="">Musica</label>
    <br>
    <input type="checkbox" name="chkprefe[]" id="chkprefe2" value="Peliculas">
    <label for="">Peliculas</label>
    <br>
    <input type="checkbox" name="chkprefe[]" id="chkprefe3" value="Lectura">
    <label for="">Lectura</label>
    <br>
    <input type="checkbox" name="chkprefe[]" id="chkprefe4" value="Television">
    <label for="">Television</label>
    <br>
    <input type="checkbox" name="chkprefe[]" id="chkprefe5" value="Internet">
    <label for="">Internet</label>
    <br><br>
    <input type="submit" value="Enviar" id="btnenviar">
</form>
</body>
</html>