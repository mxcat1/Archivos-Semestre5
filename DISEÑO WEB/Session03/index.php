<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Java Script</title>
<!--<script src="js/funciones.js"></script>-->
<!--    <script >-->
<!--        function verificar() {-->
<!--            let valor=prompt("Ingrese un numero","")-->
<!--            if (valor%2==0){-->
<!--                alert("El numero ("+valor+") Es par")-->
<!--            }-->
<!--            else{-->
<!--                alert("El numero ("+valor+") Es Impar")-->
<!--            }-->
<!--        }-->
<!--        function verificarForm() {-->
<!--            let valor = document.getElementById("txtNombre")-->
<!--            alert(valor.value)-->
<!--        }-->
<!---->
<!--    </script>-->
    <script !src="">
        function validar() {
            let valor=document.getElementById("txtValor").value
            let valor1=document.getElementById("listPref").value
            let fecha=document.getElementById("dtFecha").value
            let archivo=document.getElementById("flArchivo").value
            if (valor==""){
                alert("Falta Valor")
                return false
            }

            if (valor1==""){
                alert("Falta Preferencias")
                return false
            }
            if (archivo==""){
                alert("Falta Archivo")
                return false
            }
            if (fecha==""){

                alert("Falta Fecha")
                return false
            }


            return true

        }
    </script>

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
        <select name="listPref" id="listPref">
            <option value="">Seleccione</option>
            <option value="M">Musica</option>
            <option value="D">Danza</option>
            <option value="N">Natación</option>
        </select>
        <br>
        <input type="file" name="flArchivo" id="flArchivo">
        <br>
        <input type="date" name="dtFecha" id="dtFecha">
        <br>
        <input type="submit" name="btnEnviar" value="ver" >
    </form>
</body>
</html>