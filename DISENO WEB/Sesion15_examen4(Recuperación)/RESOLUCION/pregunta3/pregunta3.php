<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta hetp-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/javascritp.js"></script>
</head>
<body>
<form action="pagina2.php" method="post" id="formulario" onsubmit="return verificar()">
    <label for="">Preferencias</label>
    <br>
    <input type="checkbox" name="chkpreferencias[]" id="chkpreferencias1" value="Musica">
    <label for="">Musica</label>
    <br>
    <input type="checkbox" name="chkpreferencias[]" id="chkpreferencias2" value="Cine">
    <label for="">Cine</label>
    <br>
    <input type="checkbox" name="chkpreferencias[]" id="chkpreferencias3" value="Television">
    <label for="">Television</label>
    <br>
    <input type="checkbox" name="chkpreferencias[]" id="chkpreferencias4" value="Deporte">
    <label for="">Deporte</label>
    <br><br>
    <label for="">Cuentas</label>
    <br>
    <input type="checkbox" name="chkcuentas[]" id="chkcuentas1" value="Hotmail">
    <label for="">Hotmail</label>
    <br>
    <input type="checkbox" name="chkcuentas[]" id="chkcuentas2" value="Facebook">
    <label for="">Facebook</label>
    <br>
    <input type="checkbox" name="chkcuentas[]" id="chkcuentas3" value="Twitter">
    <label for="">Twitter</label>
    <br>
    <br><br>
    <label for="">Foto</label>
    <br>
    <input type="file" name="flfoto" id="flfoto" accept="image/*">
    <br><br><br><br>
    <input type="submit" value="Aceptar">

</form>
</body>
</html>
