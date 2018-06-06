<!DOCTYPE html>
<html>
<head>
	<title>jQuery</title>
   	<script type="text/javascript" src="jquery-1.4.4.min.js"></script>

	<style>
    *{font-family:sans-serif;}
    button{padding:10px 20px;font-size:14px;position:relative;}
    .acerca{
    width:400px;
    font-size:16px;
    }
    </style>
    
	<script>
    $(document).ready(function () {
        
        $('#ejemplo2').hover(function () {
            $(this).animate( { opacity: 0.3 }, 400)
        }, function () {
            $(this).animate( { opacity: 1.0 }, 400)
        });
    });
    </script>


</head>
<body>
<button id="ejemplo2">Hola2</button>
</body>
</html>
