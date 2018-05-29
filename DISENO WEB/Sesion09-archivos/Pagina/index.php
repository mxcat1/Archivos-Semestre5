<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos-reponsive.css">
</head>
<body>
<div id="contenedor">
    <header>
        <h1>Mi Sitio Web</h1>
    </header>
    <nav>
        Menu del sitio
    </nav>
    <section id="main">
        <img src="img/colibri.jpg" alt="">
        Sección
        <p>
            <?php
                include("otros/msj.txt");
            ?>
        </p>
    </section>
    <aside>
        Contiene info
        <p>
            <?php include("otros/msj.txt");
            ?>
        </p>
    </aside>
    <footer>
        Info Org
        <p>
            <?php include("otros/msj.txt");
            ?>
        </p>
    </footer>
</div>

</body>
</html>