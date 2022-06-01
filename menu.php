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

<body>

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
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
        </div>
    </header>

    <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Menús</h1>

        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Arrachera</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P1.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$<span class="">100</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Spaghetti, zanahorias al vapor y ensalada de lechuga y jitomate. </li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"> Salmón</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P2.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">110</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                        
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Pasta rotini, brocolí cocido al vapor, jitomate cherry y salmón ahumado.</li>
                            <li >&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Pollo a la Hawaiana</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P3.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">200</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Rabanos, aguacate, pollo bañado en aderezo de mango, mango en trocitos, pepino y jitomate cherry.</li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>
        

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Tortitas de arroz inflado</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P4.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">95</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Tortitas de arroz inflado con aguacate y huevo cocido acompañado de uvas, fresas, frambuesas.</li>
                            
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Waffles con huevo estrellado</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P5.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">120</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Waffles con toppings de platano, mora azul y fresa, acompañado de huevos estrellados.</li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Hot Cakes de Avena con fruta</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P6.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">85</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Hot cakes de avena con toppings de fresa y chocolate </li>
                            <li>&nbsp;</li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Ensalada Salvaje</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P7.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">40</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Espinaca, kiwi, fresa, y cebolla morada</li>
                            <li>&nbsp;</li>
                        
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Coctel de Frutas</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P8.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">75</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Manzana picada, kiwi, mandarina y granada</li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Coctel Tropical</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/P9.jpg" class="card-img-top" height="250px">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">65</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="color:#000000;"><strong>Ingredientes</strong></li>
                            <li style="color:#000000;">Mango, kiwi, fresa, plátano, frambuesas</li>
                            <li>&nbsp;</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>

            </div>


        </div>
    </main>
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

</body>
<footer>
   
    <div class="footer-content">
        <ul class="sociales">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
        </ul>
        
        
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2022 healthyfactory</p>
    </div>
    
</footer>

</html>