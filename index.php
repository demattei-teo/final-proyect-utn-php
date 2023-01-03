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
    <link rel="stylesheet" href="css/indexMain.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Tienda</title>
</head>

<body>
    <header class="header">
        <div class="container__logo">

            <img src="images/bakery-logo.png" class="logoImages" alt="logo">

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
            <li><a href="tienda.php" class="navLink">reservar</a></li>

        </nav>
    </header>
    <main>
        <section class="inicio">
            <div class="container__frase">
                <h2>Panaderia y Cafeteria</h2>
                <p>A quien madruga, un buen cafe le ayuda</p>
                <a href="tienda.php" class="button__inicio">RESERVA YA </a>


            </div>

            <div class="container__inicio-img">
                <div class="container__background">

                </div>

            </div>

        </section>



        <section class="promociones">
            <?php
            if (isset($_GET['promocion'])) {
                switch ($_GET['promocion']) {
                    case 'CM':
                        $precio = '$5.00';
                        break;

                    case 'CPM':
                        $precio = '$7.00';
                        break;

                    case 'CPC':
                        $precio = '$5.00';
                        break;

                    case '2CM':
                        $precio = '$7.00';
                        break;
                }
            }
            ?>

            <h2>!Promociones¡</h2>
            <div class="container__cards">
                <div class="card">
                    <img src="images/cafe.jpg" alt="cafe panaderia" class="card__img">
                    <div class="content">
                        <p>coffe + 3 medialunas</p>

                    </div>
                    <p>
                        <?php
                        if ('CM' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=CM" class="button__cards">Reservar Promocion</a>
                </div>
                <div class="card">
                    <img src="images/pie.jpg" alt="pie panaderia" class="card__img">
                    <div class="content">
                        <p>coffe + porcion de pie de manzana</p>
                    </div>
                    <p>
                        <?php
                        if ('CPM' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=CPM" class="button__cards">Reservar Promocion</a>

                </div>
                <div class="card">
                    <img src="images/chocolate.jpg" alt="chocolate panaderia" class="card__img">
                    <div class="content">
                        <p>coffe + porcion de torta de chocolate </p>
                    </div>
                    <p>
                        <?php
                        if ('CPC' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=CPC" class="button__cards">Reservar Promocion</a>
                </div>
                <div class="card">
                    <img src="images/cafe.jpg" alt="cafe panaderia" class="card__img">
                    <div class="content">
                        <p> 2 coffe + 6 medialunas (desayuno doble)</p>

                    </div>
                    <p>
                        <?php
                        if ('2CM' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=2CM" class="button__cards">Reservar Promocion</a>
                </div>
                <div class="card">
                    <img src="images/pie.jpg" alt="pie panaderia" class="card__img">
                    <div class="content">
                        <p>coffe + porcion de pie de manzana</p>
                    </div>
                    <p>
                        <?php
                        if ('CPM' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=CPM" class="button__cards">Reservar Promocion</a>

                </div>
                <div class="card">
                    <img src="images/chocolate.jpg" alt="chocolate panaderia" class="card__img">
                    <div class="content">
                        <p>coffe + porcion de torta de chocolate </p>
                    </div>
                    <p>
                        <?php
                        if ('CPC' == $_GET['promocion']) {
                            echo ($precio);
                        }
                        ?>
                    </p>
                    <a href="index.php?promocion=CPC" class="button__cards">Reservar Promocion</a>
                </div>

            </div>


        </section>

        <section class="sobre__nosotros">
            <h2>Bakery</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus accusamus ipsam molestiae distinctio assumenda, expedita ex illo. Quaerat quia iusto sed, voluptas dolor quis cupiditate, tempora non, consequuntur amet debitis!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae saepe eligendi accusamus dolor eaque eum distinctio possimus a deserunt, facere unde quidem! Ducimus pariatur ipsum quis minus voluptate delectus optio!</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere exercitationem aliquam facilis modi eveniet suscipit laudantium ducimus quidem illo aut ullam vero consequatur placeat doloribus repellat a sapiente, sequi dolorum?</p>
        </section>

        <section class="productos">
            <h2>Tortas dulces</h2>
            <div class="container__productos">
                <div class="productos__cards">
                    <img src="images/lemon_pie.jpg" alt="pasteles" class="productos__img">
                    <p>Lemon Pie</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>


                <div class="productos__cards">
                    <img src="images/selva_negra-torta.jpg" alt="pasteles" class="productos__img">
                    <p>Selva Negra</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>


                <div class="productos__cards">
                    <img src="images/tiramisu.jpg" alt="pasteles" class="productos__img">
                    <p>Tiramisu</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>


                <div class="productos__cards">
                    <img src="images/torta_capresse.jpg" alt="pasteles" class="productos__img">
                    <p>Torta Capresse</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>

                <div class="productos__cards">
                    <img src="images/torta_sachert.jpg" alt="pasteles" class="productos__img">
                    <p>Torta sachert</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>


                <div class="productos__cards">
                    <img src="images/zuccotto.jpg" alt="pasteles" class="productos__img">
                    <p>zuccotto</p>
                    <div class="container__valor">
                        <p>$10.00</p>
                        <a href="#reservar">Reservar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <h3>Bakery</h3>
        <p>A quien madruga, un buen cafe le ayuda</p>
        <div class="container__footer">
            <div class="container__contactarnos">
                <h4>contactanos</h4>
                <div class="container__datos">
                    <em>tel:0000-0000</em>
                    <em>bakeryPanaderia@gmail.com</em>
                    <em>bakeryCafeteria@gmail.com</em>
                </div>
            </div>
            <hr>
            <h4>sucursales</h4>
            <div class="container__sucursales">

                <div class="container__sucursal-1">
                    <p>sucursal de san justo</p>

                    <em>tel:0000-0000</em>
                    <em>arieta 4550, san justo</em>
                    <em>horarios: 7:00/19:00</em>
                </div>

                <div class="container__sucursal-2">
                    <p>sucursal de ramos mejia</p>

                    <em>tel:0000-0000</em>
                    <em>av de mayo 4550, ramos mejia</em>
                    <em>horarios: 7:00/19:00</em>
                </div>
            </div>
            <hr>
            <p>Copyright © 2022</p>
        </div>

    </footer>
    <script src="javaScript/codigo.js"></script>
</body>