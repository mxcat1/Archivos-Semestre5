<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi pagina web</title>
    <link rel="stylesheet" href="css/estructura.css">
    <script src="js/script-estructura.js"></script>
</head>
<body>
<div class="contenedor">
    <header>
        <h1>Mi Pagina Web</h1>
    </header>
    <nav>

        <div class="menu-cel" id="menu-cel">
            <div class="menu1"></div>
            <div class="menu1"></div>
            <div class="menu1"></div>
        </div>
        <div class="menu-desplegable">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Contacto</a></li>
                <li><a href="">Ubicanos</a></li>
            </ul>
        </div>
        <h3>Menu</h3>

    </nav>
    <section id="main">
        <img src="img/colibri.jpg" alt="">
        <p>
            <?php include ("otros/msj.txt");
            ?>
        </p>
    </section>
    <aside>
        <p>
            <?php include ("otros/msj.txt");
            ?>
        </p>
    </aside>
    <footer>
        <p>
            <?php include ("otros/msj.txt");
            ?>
        </p>
    </footer>
</div>

</body>
</html>