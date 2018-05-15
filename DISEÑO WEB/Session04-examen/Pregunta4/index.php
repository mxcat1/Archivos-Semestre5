<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script !src="">
        function fn1() {
            let texto1=document.getElementById("txttexto1").value
            alert("Esto es el texto del campo 1 :"+ texto1)
        }
        function fn2(){
            let texto1=document.getElementById("txttexto1").value
            document.getElementById("txttexto3").value=texto1
        }
        function fn3() {
            let texto1=document.getElementById("txttexto1").value
            let texto2=document.getElementById("txttexto2").value
            document.getElementById("txttexto3").value=texto1+texto2
        }
    </script>
</head>
<body>
Texto 1: <input type="text" name="txttexto1" id="txttexto1">
<button onclick="fn1()"> Ver1 fn1</button>
<br><br>
Texto 2: <input type="text" name="txttexto2" id="txttexto2">
<button onclick="fn2()"> Ver2 fn2</button>
<br><br>
Texto 3: <input type="text" name="txttexto3" id="txttexto3">
<button onclick="fn3()"> Ver3 fn3</button>
</body>
</html>