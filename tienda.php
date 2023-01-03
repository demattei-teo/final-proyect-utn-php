<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reservar.css">
    <title>tienda</title>
</head>

<body>
    <header class="header">
        <div class="container__logo">

            <img src="images/bakery-logo.png" class="logoImages">

            <div class="container__buttons" id="container__buttons">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 button__menu" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <line x1="4" y1="6" x2="20" y2="6" />
                    <line x1="4" y1="12" x2="20" y2="12" />
                    <line x1="4" y1="18" x2="20" y2="18" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-minimize button__close" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="5 9 9 9 9 5" />
                    <line x1="3" y1="3" x2="9" y2="9" />
                    <polyline points="5 15 9 15 9 19" />
                    <line x1="3" y1="21" x2="9" y2="15" />
                    <polyline points="19 9 15 9 15 5" />
                    <line x1="15" y1="9" x2="21" y2="3" />
                    <polyline points="19 15 15 15 15 19" />
                    <line x1="15" y1="15" x2="21" y2="21" />
                </svg>


            </div>
        </div>
        <nav class="botonera_principal">


            <li><a href="index.php" class="navLink">Home</a></li>
            <li><a href="tienda.php" class="navLink">productos</a></li>
            <li><a href="#" class="navLink">Nosotros</a></li>
            <li><a href="#" class="navLink">reservar</a></li>

        </nav>
    </header>
    <section class="container__reservar">


        <section class="formulario__reservar">
            <h2>Reservar</h2>
            <form method="POST">
                <div class="container__input">
                    <label>Ingrese su nombre</label>
                    <input type="text" name='name' id="nombre" class="reservar_input" placeholder="manuel">
                </div>
                <div class="container__input">
                    <label>Ingrese su email</label>
                    <input type="email" name="email" id="email" class="reservar_input" placeholder="manuelgomez@gmial.com">
                </div>
                <div class="container__input">
                    <label>Ingrese la fecha de reserva</label>
                    <input type="date" name='fecha_reserva' id="fecha" class="reservar_input">
                </div>

                <input type="submit" name='register' value="enviar" id="input_enviar" class="button__input">

            </form>
            <?php
            include('reservar.php');

            ?>

        </section>
        <section class="img-background">
            <div>Bakery</div>
        </section>
    </section>
    <script src="javaScript/codigo.js"></script>
</body>

</html>