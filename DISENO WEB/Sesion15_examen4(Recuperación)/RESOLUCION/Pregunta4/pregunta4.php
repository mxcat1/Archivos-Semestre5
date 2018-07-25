<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/estilosSitio.css">
</head>
<body>
    <div class="Contenedor">
		<header>
        	<h1>Mi sitio web </h1>
        </header>
        
        <nav>
        	<?php //include("menu/menu.php"); ?>
        </nav>
        
        <section id="Main">
        	<img src="img/colibri.jpg">
            <p> <?php include("msj.txt"); ?> </p>
        </section>
        
        <aside>
        	(Aside)
            <p> <?php include("msj.txt"); ?> </p>
        </aside>
        
        <footer>
        	(PIE DE PAGINA)
            <p> <?php include("msj.txt"); ?> </p>
        </footer>
        
    </div>
</body>
</html>
