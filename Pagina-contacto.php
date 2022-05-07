<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweeteners</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="estilo.css">
    <!-- Fuentes -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=El+Messiri&display=swap');
    </style>
</head>

<body>
    <!--Aquí empieza el menú-->

    <nav>
        <a href="Index.html">
            <img id="logo" src="Media/Imagenes/Logo.jpg" alt="">
        </a>
        <ul id="menu">

            <li class="elementoMenu"><a href="Pagina-tartas.html">Tartas</a></li>
            <li class="elementoMenu"><a href="Pagina-bollos.html">Bollería</a></li>
            <li class="elementoMenu"><a href="Pagina-caramelos.html">Caramelos</a></li>
            <li class="elementoMenu"><a href="Pagina-contacto.html">Sobre nosotros</a></li>

            <a title="Login" href="Pagina-login.html"><img src="Media/Iconos/perfil.png" class="icono" id="sesion" width="50px" height="50px"></a>
            <img src="Media/Iconos/lupa.png" class="icono" id="lupa" width="50px" height="50px"><a href=""></a></img>
            <a title="Carrito" href="Pagina-carrito.html"><img src="Media/Iconos/carrito.png" class="icono" id="carro" width="45px" height="50px" /></a>

        </ul>


    </nav>
    <br>
    <br>
    <br>

    <section id="contacto">

        <h2 class="tituloSeccion titulosBlanco">Contacto</h2>

        <div id="contenedorContacto">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2991.8989147870425!2d2.1703407051117107!3d41.41971294279111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2ccbb32fbd5%3A0xf8d0febe8ebd961a!2sEscuela%20P%C3%BAblica%20Parque%20del%20Guinard%C3%B3!5e0!3m2!1ses!2ses!4v1613953069293!5m2!1ses!2ses" width="470" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <form id="formu" name="frmContacto" action=" <?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?> " method="post">

                <p id="textoContacto"></p>

                <input type="text" name="nombre" id="dato" placeholder="Nombre: " value="<?php if (!$enviado && isset($nombre)) echo $nombre ?>">

                <input type="email" name="correo" id="dato" placeholder="Correo: " value="<?php if (!$enviado && isset($correo)) echo $correo ?>">

                <input type="text" name="mensaje" id="dato" maxlength="350" placeholder="Mensaje: " value="<?php if (!$enviado && isset($mensaje)) echo $mensaje ?>">
                <?php if (!empty($errores)) : ?>
                    <div class="alert error">
                        <?php echo $errores; ?>
                    </div>

                <?php elseif ($enviado) : ?> //esta variable sera true cuando todos los datos esten rellenados correctamente
                    <div class="alert success">
                        <p>Enviado Correctamente</p>
                    </div>
                <?php endif ?>

                <input id="botonEnviar" type="submit" class="btn btn-primary" value="Enviar">

            </form>
        </div>
    </section>

    <footer>
        <div class="footer">
            <a title="Instagram" href="https://www.instagram.com/"><img src="Media/Iconos/instagram.png" class="insta" width="50px" height="50px" alt="" /></a>
            <a title="Twitter" href="https://twitter.com/"><img src="Media/Iconos/twitter.png" class="twit" width="50px" height="50px" alt="" /></a>
        </div>

    </footer>


</body>

</html>