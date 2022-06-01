<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/97fdd31b30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="./css/estilo.css">

    <title>Catálogo</title>
</head>

<body class=" bg-light">

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light navbar-main" >
            <div class="container">
                <!-- BRANDING -->
            <a href="#" class="navbar-brand">Healthy Factory
            </a>

            <!-- BTN -->
            <button class="navbar-toogler" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Barra de navegación">
                <span class="navbar-toggle-icon"></span>
            </button>
            <!-- ITEMS -->
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="nav ml-auto text-dark">
                    <a href="index.php" class="nav-link active" aria-current="true">Inicio</a>
                    <a href="menu.php" class="nav-link">Menú</a>
                    <a href="#" class="nav-link">Contacto</a>
                    <a href="compra.php" class="nav-link"><img src="" alt="">Carrito</a>
                </div>
            </div>
        </div>
    
</nav>

            <!-- <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md fixed-top" id="navbar">
                    <a class="navbar-brand" id="navbar" style="color:white; font-size:20px" href="#">Healthy Factory</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/3394009.png" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Realizar
                                        Compra</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> -->
    </header>


        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false" style="width:100%;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img id="img-carrousel" src="./img/P17.jpg" class="mx-auto d-block center" style="height:550px; width:100%;" alt="p13">
              </div>
              <div class="carousel-item">
                <img id="img-carrousel" src="./img/P18.jpg" class="mx-auto d-block w-40" style="height:550px; width:100%;" alt="p14">
              </div>
              <div class="carousel-item">
                <img id="img-carrousel" src="./img/P19.jpg" class="mx-auto d-block w-40" style="height:550px; width:100%;"  alt="P15">
              </div>
            </div>
            <button class="carousel-control-prev" style="border: none; width: 50px;" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" style="border: none; width: 50px;" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden"></span>
            </button>
        </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
<footer>
   
    <div class="footer-content">
        <ul class="sociales">
            <li><a href="https://www.facebook.com/liitzy.miichelle"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/_ailyn.vazquez/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5584325031"><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>
        
        
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 healthyfactory</p>
    </div>
    
</footer>

</html>