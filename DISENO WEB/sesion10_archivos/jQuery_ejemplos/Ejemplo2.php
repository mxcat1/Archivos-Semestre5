<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>
   	<script type="text/javascript" src="jquery-1.4.4.min.js"></script>

	<style>
    *{font-family:sans-serif;}
    button{padding:10px 20px;font-size:14px; background: #040508; color: white;}
    body{
     background: #33ff00;
    }
    </style>
    
    <script>
    $(document).ready(function () {
        $('#ejemplo1').click(function () {
            $(this).css('width','500');
            $(this).hide(1000); // 'this' es un selector que se usa para seleccionar el elemento ya seleccionado anteriormente, en este caso #ejemplo1
        });
    });
    </script>

</head>
<body>
<button id="ejemplo1">Hola</button>
</body>
</html>
