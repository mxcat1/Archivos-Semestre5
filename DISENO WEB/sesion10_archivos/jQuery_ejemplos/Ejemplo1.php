<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<script type="text/javascript">
 		$(document).ready(function() {
 		    $('div').html("<h1>Soy un texto generado por jQuery!</h1>")
            $('div').after("<h2>Soy otro texto</h2>")
            $('#boton').click(function(){
                $('div').hide(500)
            })
            $('#boton1').click(function () {
                $('div').show(500)
            })
		})
	</script>
</head>
<body>
<div id="hola"></div>
<button id="boton">Aqui</button>
<button id="boton1">Aparecer</button>
</body>
</html>
