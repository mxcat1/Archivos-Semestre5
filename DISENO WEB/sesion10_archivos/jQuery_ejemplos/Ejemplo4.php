<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>
   	<script type="text/javascript" src="jquery-1.4.4.min.js"></script>

	<style>
    *{font-family:sans-serif;}
    button{padding:10px 20px;font-size:14px;position:relative;}
    </style>
    
	<script>
    $(document).ready(function () {
        $('#ejemplo3').toggle(function () {
            $(this).animate({left:'200px'}, 300)
        }, function () {
            $(this).animate({left:'0px'}, 300)
        });
    });
    </script>

</head>
<body>
<button id="ejemplo3">Hola3</button>
</body>
</html>
