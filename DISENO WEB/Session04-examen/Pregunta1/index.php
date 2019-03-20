<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script !src="">
        function validar(){
            let nombre=document.getElementById("txtnombre").value.trim()
            let ape=document.getElementById("txtapellidos").value.trim()
            let edad=document.getElementById("txtedad").value.trim()
            let sexo=document.getElementById("masculino").value
            let sexo1=document.getElementById("femenino").value
            let preferencias=document.getElementById("premusical").value
            alert(sexo)
            if  (nombre===""){
                alert("Escriba Su nombre")
                return false
            }
            if  (ape===""){

                alert("Escriba Su apellido")
                return false
            }
            if  (edad===""){
                alert("Escriba Su edad")
                return false

            }
            if (!(edad>0) && !(edad<120)){
                alert("Escriba solo numeros en la edad")
                return false
            }

            if  (sexo===on || sexo1===on){

                alert("seleccione un sexo")
                return false
            }
            if (preferencias ==""){
                alert("Seleccione una Preferencia")
                return false
            }
            return true
        }
    </script>
</head>
<body bgcolor="aqua">
<center><h1>INGRESE SUS DATOS</h1></center>
<form action="pagina2.php" name="form1" method="post" onsubmit="validar()">
    Nombres: <input type="text" name="txtnombre" id="txtnombre" width="700">
    <br><br>
    Apellidos: <input type="text" name="txtapellidos" id="txtapellidos" width="700">
    <br><br>
    Direccion: <input type="text" name="txtdirec" id="txtdirec" width="700">
    <br><br>
    Edad: <input type="text" name="txtedad" id="txtedad" width="700">
    <br><br>
    Fecha de Nacimiento: <select name="anho" id="anho">
        <option value="">Seleccione un Año</option>
        <script !src="">
            for (i=1700;i<2018;i++){
                document.write("<option values="+ i +">"+ i +"</option>")
            }

        </script>
    </select>
    Mes: <select name="mes" id="mes">
        <option value="">Seleccione un Mes</option>
        <option value="Enero">Enero</option>
        <option value="Febrero">Febrero</option>
        <option value="Marzo">Marzo</option>
        <option value="Abril">Abril</option>
        <option value="Mayo">Mayo</option>
        <option value="Junio">Junio</option>
        <option value="Julio">Julio</option>
        <option value="Agosto">Agosto</option>
        <option value="Septiembre">Septiembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Noviembre">Noviembre</option>
        <option value="Diciembre">Diciembre</option>
    </select>
    Dia: <select name="dia" id="dia">
        <option value="">Seleccione un Dia</option>
        <script !src="">
            for (d=1;d<31;d++){
                document.write("<option values="+ d +">"+ d +"</option>")
            }
        </script>
    </select>
    <br><br>
    Sexo:
        Masculino   <input type="radio" name="sexo" id="masculino"  checked >
        Femenino   <input type="radio" name="sexo" id="femenino" >
    <br><br>
    Preferencia Musical:
    <select name="musical" id="premusical">
        <option value="">Elija Opcion</option>
        <option value="regge">Regge</option>
        <option value="rock">Rock</option>
    </select>
    <br><br>
    <button onclick="validar()"> Restablecer</button>
    <button> Ingresar</button>
</form>
</body>
</html>