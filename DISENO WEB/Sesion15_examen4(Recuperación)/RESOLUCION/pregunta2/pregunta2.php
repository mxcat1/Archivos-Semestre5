<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
    <script !src="">
        var cantidad = prompt("Escriba el numero de trablas q desea definir");
        if (cantidad<0){
            alert("No se aceptan valores negativos")
        }
        else if(cantidad>0){
            console.log(cantidad)
            document.write("<h1>Pregunta 2</h1>")
            for (var i=1;i<=cantidad;i++){
                document.write(" <table width='300' border='1'> <tr> <td rowspan='4'>"+ i +"</td> <td>Foto</td> <td colspan='3'>Datos Personales</td> </tr> <tr> <td>Nombres</td> <td>Juan Pablo</td> <td rowspan='2'><img src='img/"+i+".jpg' alt=''></td> </tr> <tr> <td>Apellidos</td> <td>Diaz RomaÃ±a</td> </tr> <tr> <td colspan='3'>Direccion Actual</td> </tr> </table>")
            }
        }
        else{
            document.write("<img src=\"img/1.jpg \" alt=\"\">")
        }
    </script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>


<body>

</body>
</html>
