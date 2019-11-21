<html lang="es">
  <!--1 paso Se comio el codigo fuente del primer proyecto y se pego aca-->
  <!-- Head -->
  <head>
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Reset- 4 paso- En el archivo de laravel se cambio la ruta del css-->
<link rel="stylesheet" href="/css/reset.css">

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/c028c941e3.js" crossorigin="anonymous"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300|Shadows+Into+Light&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="/css/styles.css ">      <title>Rincón del Arte</title>
  </head>

  <!-- Body -->
  <body>

    <!-- Contenedor de Bootstrap -->
    <div class="container-fluid">

      <!-- Header -->
      <header class="row">

    <!-- Menú desplegable -->
    <div class="menu d-xl-none col align-items-center d-flex">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <!-- Navegación izquierda -->
    <ul class="nav-izquierda d-none d-xl-flex order-xl-1 col-xl-3 align-items-center justify-content-start">
        <div class="row w-100">
            <li class="col-xl-2">
                <a href="index.php">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="col-xl-6">
                <a href="#">
                    <i class="far fa-envelope"></i>
                    Contactanos
                </a>
            </li>
            <li class="col-xl-4">
                <a href="faq.php">
                    <i class="far fa-question-circle"></i>
                    Ayuda
                </a>
            </li>
        </div>
    </ul>

    <!-- Navegación derecha -->
    <ul class="nav-derecha d-none d-xl-flex order-xl-3 col-xl-6 align-items-center justify-content-end container-fluid">
        <div class="row w-100 no-gutters">
            <li class="col-xl-2 offset-xl-8"><a href="login.php">Iniciar sesión</a></li>

                    <li class="col-xl-2"><a href="registro.php">Crear cuenta</a></li>
        </div>
    </ul>

    <div class="w-100 d-none d-xl-block order-xl-4"></div>

    <!-- Navegación secundaria -->
    <ul class="nav-secundaria d-none d-xl-block order-xl-7 col-xl-6 container-fluid">
        <div class="row">
            <li class="col-xl">
                <!-- Desplegable -->
                <a href="#">
                    Categorías
                </a>
            </li>
            <li class="col-xl">
                <a href="#">
                    Populares
                </a>
            </li>
            <li class="col-xl">
                <a href="#">
                    Próximamente
                </a>
            </li>
            <li class="col-xl">
                <a href="#">
                    Nuevos
                    </a>
            </li>
            <li class="col-xl">
                <a href="#">
                    Ofertas
                </a>
            </li>
        </div>
    </ul>

    <!-- Espacio para rellenar header -->
    <div class="espacio d-none d-xl-block order-xl-8 col-xl-2"></div>

    <!-- Logo de la empresa -->
    <div class="logo col order-xl-5 col-xl-2">
        <h1>
            <a href="index.php">
                <img src="/img/logo.png" alt="" class="logo-imagen">
            </a>
        </h1>
    </div>


    <div class="selector-wrap d-none d-xl-flex order-xl-9 col-xl-2 align-items-center justify-content-end container-fluid">
        <div class="row">
            <!-- Selector de idioma -->
            <form method="" action="" class="col-xl-6">
                <select name="selectLanguage">
                    <option value="en_US">
                        English
                    </option>
                    <option value="es_ES" selected="selected">
                        Español
                    </option>
                </select>
            </form>
            <!-- Selector de moneda -->
            <form method="" action="" class="col-xl-6">
                <select name="selectCurrency">
                    <option value="ARS" selected="selected">
                        $&nbsp;ARS
                    </option>
                    <option value="USD">
                        $&nbsp;USD
                    </option>
                </select>
            </form>
        </div>
    </div>

    <!-- Carrito de compras -->
    <div class="compras order-xl-10 col col-xl-2 align-items-center d-flex justify-content-end container-fluid">
        <div class="row">
            <span class="precio-total d-none d-md-block col-md-7">
                ARS$15.234,56
            </span>
            <a href="#" class="col col-md-5">
                <span>137</span>
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
    </div>

    <!-- Buscador -->
    <div class="buscador order-xl-6 col-12 col-xl-10 align-items-center d-flex">
        <div class="container-fluid">
            <div class="row">
                <form method="get" action="#" class="col-12 col-lg-10 container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" placeholder="Buscar obras por título o autor" name="busqueda" value="" class="buscador-barra w-100">
                        </div>
                        <div class="col-2 pl-0">
                            <button type="submit" class="buscador-boton w-100 h-100">
                                <span>
                                <i class="fas fa-search"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="busqueda-avanzada d-none d-lg-block col-lg-2 container-fluid">
                    <a href="#" class="row h-100 align-items-center">
                        <span class="col-lg-12">
                            Búsqueda avanzada
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Envío gratis -->
    <div class="envio-gratis-wrap order-xl-2 col-12 align-items-center d-flex justify-content-center col-xl-3">
        <div class="envio-gratis w-100 h-100">
            <a href="#">
                <i class="fas fa-rocket"></i>
                Envío gratis
            </a>
        </div>
    </div>


</header>
      <!-- Contenido principal de la página -->
      <main class="row">

       <section class="d-none d-md-block col-md-3 col-xl-2 pr-0 sidebar-wrap">
    <div class="sidebar">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
        <div class="main-content-wrap col-12 col-md-9 col-xl-10 container-fluid">
          <div class="main-content row">

            <!-- Carousel -->
<div class="carousel-container d-none d-sm-block col-sm-12 container-fluid">
  <div class="row h-100">


<section id="demo" class="carousel carousel-fade slide col-12" data-ride="carousel">

<!-- Indicadores del carousel -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- Imágenes del carousel -->
<div class="carousel-inner">

  <div class="carousel-item active">
    <a href="#">
      <img src="/img/carousel1.png" alt="...">
    </a>
  </div>

  <div class="carousel-item">
    <a href="#">
      <img src="/img/carousel2.png" alt="...">
    </a>
  </div>

  <div class="carousel-item">
    <a href="#">
      <img src="/img/carousel3.png" alt="...">
    </a>
  </div>

</div>

<!-- Controles del carousel -->
<div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>
</div>
</div><section class="col-12 products-wrap">
    <div class="products">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
          </div>
        </div>

      </main>

      <!-- Footer -->
      <footer class="row">

    <div class="col-5 col-md-4 col-lg-3 col-xl-2 container-fluid">
        <ul class="row">
            <li class="col-4"><a href="faq.php">Ayuda</a></li>

            <li class="col-4"><a href="login.php">Ingresá</a></li>
                        <li class="col-4"><a href="registro.php">Registrate</a></li>
        </ul>
    </div>

    <div class="col-5 offset-2 col-md-4 offset-md-4 col-lg-3 offset-lg-6 col-xl-2 offset-xl-8 container-fluid">
        <ul class="row">
            <li class="col-2">
                <a href="https://facebook.com/" target="_blank" class="fab fa-facebook"></a>
            </li>
            <li class="col-2">
                <a href="https://instagram.com/" target="_blank" class="fab fa-instagram"></a>
            </li>
            <li class="col-2">
                <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
            </li>
            <li class="col-2">
                <a href="https://pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
            </li>
        </ul>
    </div>

</footer>
    </div>
  </body>

</html>
