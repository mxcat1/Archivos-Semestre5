<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script !src="">
        function validar() {
            let cantidad=prompt("Escriba el numero de tablas que se desea definir")
            if (!(cantidad>0) && !(cantidad<100000000)){
                alert("Dato Incorrecto ----------("+cantidad+")")
            }
            for (i=1;i<=cantidad;i++){
                document.write("<table width='300' border='1'> <tr> <td rowspan='4'>"+ i +"</td> <td>Foto</td> <td colspan='3'>Datos Personales</td> </tr> <tr> <td rowspan='3'>img</td> <td>Nombres</td> <td>Juan Pablo</td> <td rowspan='2'><p>Codigo</p> <p>001</p></td> </tr> <tr> <td>Apellidos</td> <td>Diaz Romaña</td> </tr> <tr> <td colspan='3'>Direccion Actual</td> </tr> </table>")

            }
        }
        validar()
    </script>
</head>
<body>


</body>
</html>