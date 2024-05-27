<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gelice - Página Inicial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img_icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img_icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img_icon/favicon-16x16.png">
    <link rel="manifest" href="/img_icon/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="admin/index.php">LOGIN COMO ADM</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://twitter.com/kleitin_mimoso/likes">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/kleitin_mimoso/likes">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/kleitin_mimoso/likes">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="https://twitter.com/kleitin_mimoso/likes">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="https://twitter.com/kleitin_mimoso/likes">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">G</span>ELICE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="about.php" class="nav-item nav-link">Sobre Nós</a>
                        <a href="product.php" class="nav-item nav-link">Preços</a>
                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">G</span>ELICE</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.php" class="nav-item nav-link">Serviços</a>
                        <a href="gallery.php" class="nav-item nav-link">Categorias</a>
                        <a href="contact.php" class="nav-item nav-link">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"><?php if (empty($_SESSION["banner1_titulo"])){
                        echo "Sua vida pede mais sabor, sua vida pede sorvete.";
                      } else{
                        echo $_SESSION["banner1_titulo"];
                      }?></h4>
                            <h1 class="display-3 text-white mb-md-4"><?php if (empty($_SESSION["banner1_subtitulo"])){
                        echo "Diversos sabores de sorvete só aqui!";
                      } else{
                        echo $_SESSION["banner1_subtitulo"];
                      }?></h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"><?php if (empty($_SESSION["banner2_titulo"])){
                        echo "Explosão de sabores em apenas uma casquinha";
                      } else{
                        echo $_SESSION["banner2_titulo"];
                      }?></h4>
                            <h1 class="display-3 text-white mb-md-4"><?php if (empty($_SESSION["banner2_subtitulo"])){
                        echo "Sorvetes feitos com leite orgânico. Experimente!";
                      } else{
                        echo $_SESSION["banner2_subtitulo"];
                      }?>
                      </h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">
                      <?php if (empty($_SESSION["titulo_about"])){
                        echo "Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea";
                      } else{
                        echo $_SESSION["titulo_about"];
                      }
                    ?></h5>
                    <p><?php if (empty($_SESSION["subtitulo_about"])){
                        echo "Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod";
                      } else{
                        echo $_SESSION["subtitulo_about"];
                      }?>
                    </p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p><?php if (empty($_SESSION["titulo_about2"])){
                        echo "Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor";
                      } else{
                        echo $_SESSION["titulo_about2"];
                      }?></p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i><?php if (empty($_SESSION["subtitulo_about2"])){
                        echo "Eos kasd eos dolor";
                      } else{
                        echo $_SESSION["subtitulo_about2"];
                      }?></h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i><?php if (empty($_SESSION["subtitulo2_about2"])){
                        echo "Eos kasd eos dolor";
                      } else{
                        echo $_SESSION["subtitulo2_about2"];
                      }?></h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i><?php if (empty($_SESSION["subtitulo3_about2"])){
                        echo "Eos kasd eos dolor";
                      } else{
                        echo $_SESSION["subtitulo3_about2"];
                      }?></h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/promotion.jpg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea
                        justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Best Services We Provide For Our Clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php if (empty($_SESSION["url_servico1"])){
                        echo "img/service-1.jpg";
                      } else{
                        echo $_SESSION["url_servico1"];
                      }?>">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php if (empty($_SESSION["titulo_servico1"])){
                        echo "Quality Maintain";
                      } else{
                        echo $_SESSION["titulo_servico1"];
                      }?></h5>
                                <p><?php if (empty($_SESSION["texto_servico1"])){
                        echo "Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo";
                      } else{
                        echo $_SESSION["texto_servico1"];
                      }?></p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php if (empty($_SESSION["url_servico2"])){
                        echo "img/service-2.jpg";
                      } else{
                        echo $_SESSION["url_servico2"];
                      }?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php if (empty($_SESSION["titulo_servico2"])){
                        echo "Individual Approach";
                      } else{
                        echo $_SESSION["titulo_servico2"];
                      }?></h5>
                                <p><?php if (empty($_SESSION["texto_servico2"])){
      echo "Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo";
     } else{
      echo $_SESSION["texto_servico2"];
   }?></p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php if (empty($_SESSION["url_servico3"])){
                        echo "img/service-3.jpg";
                      } else{
                        echo $_SESSION["url_servico3"];
                      }?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php if (empty($_SESSION["titulo_servico3"])){
                        echo "Celebration Ice Cream";
                      } else{
                        echo $_SESSION["titulo_servico3"];
                      }?></h5>
                                <p><?php if (empty($_SESSION["texto_servico3"])){
                        echo "Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo";
                      } else{
                        echo $_SESSION["texto_servico3"];
                      }?></p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php if (empty($_SESSION["url_servico4"])){
                        echo "img/service-4.jpg";
                      } else{
                        echo $_SESSION["url_servico4"];
                      }?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php if (empty($_SESSION["titulo_servico4"])){
                        echo "Delivery To Any Point";
                      } else{
                        echo $_SESSION["titulo_servico4"];
                      }?></h5>
                                <p><?php if (empty($_SESSION["texto_servico4"])){
                        echo "Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo";
                      } else{
                        echo $_SESSION["texto_servico4"];
                      }?></p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Cone</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Vanilla</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Chocolate</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php if (empty($_SESSION["url_cone"])){
                        echo "img/portfolio-1.jpg";
                      } else{
                        echo $_SESSION["url_cone"];
                      }
                    ?>" alt="">
                        <a class="portfolio-btn" href="<?php if (empty($_SESSION["url_cone"])){
                        echo "img/portfolio-1.jpg";
                      } else{
                        echo $_SESSION["url_cone"];
                      }
                    ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php if (empty($_SESSION["url_vanilla"])){
                        echo "img/portfolio-2.jpg";
                      } else{
                        echo $_SESSION["url_vanilla"];
                      }
                    ?>" alt="">
                        <a class="portfolio-btn" href="<?php if (empty($_SESSION["url_vanilla"])){
                        echo "img/portfolio-2.jpg";
                      } else{
                        echo $_SESSION["url_vanilla"];
                      }
                    ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php if (empty($_SESSION["url_chocolate"])){
                        echo "img/portfolio-3.jpg";
                      } else{
                        echo $_SESSION["url_chocolate"];
                      }
                    ?>" alt="">
                        <a class="portfolio-btn" href="<?php if (empty($_SESSION["url_chocolate"])){
                        echo "img/portfolio-3.jpg";
                      } else{
                        echo $_SESSION["url_chocolate"];
                      }
                    ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                        <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                        <a class="portfolio-btn" href="img/portifolio-5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                        <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Ice Cream Lovers</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0"><?php if (empty($_SESSION["preco_produto1"])){
                        echo "$99";
                      } else{
                        echo $_SESSION["preco_produto1"];
                      }?></h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                          <img class="rounded-circle w-100 h-100" src="<?php if (empty($_SESSION["url_produto1"])){
                        echo "img/product-2.jpg";
                      } else{
                        echo $_SESSION["url_produto1"];
                      }?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?php if (empty($_SESSION["texto_produto1"])){
                        echo "Vanilla Ice Cream";
                      } else{
                        echo $_SESSION["texto_produto1"];
                      }?></h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-2.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-4.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-5.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-2.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="<?php if (empty($_SESSION["url_funcionario1"])){
                        echo "img/team-1.jpg";
                      } else{
                        echo $_SESSION["url_funcionario1"];
                      }?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5"><?php if (empty($_SESSION["titulo_funcionario1"])){
                        echo "Full Name";
                      } else{
                        echo $_SESSION["titulo_funcionario1"];
                      }?></h3>
                                <h6 class="text-uppercase text-muted mb-4"><?php if (empty($_SESSION["texto_funcionario1"])){
                        echo "Designation";
                      } else{
                        echo $_SESSION["texto_funcionario1"];
                      }?></h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="img/team-4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Full Name</h3>
                                <h6 class="text-uppercase text-muted mb-4">Designation</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">O que nossos clientes dizem sobre nossos sorvetes?</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4"><?php if (empty($_SESSION["texto_testimonial1"])){
                        echo 'Uma vez um velho sábio disse "meu fi quer sorvete?" e eu respondi na mesma hora "mim de papai".';
                      } else{
                        echo $_SESSION["texto_testimonial1"];
                      }?></h4>
                            <img class="img-fluid mx-auto mb-3" src="<?php if (empty($_SESSION["url_testimonial1"])){
                        echo 'img/testimonial-1.jpg';
                      } else{
                        echo $_SESSION["url_testimonial1"];
                      }?>" alt="">
                            <h5 class="font-weight-bold m-0"><?php if (empty($_SESSION["titulo_testimonial1"])){
                        echo 'Jackie Chan';
                      } else{
                        echo $_SESSION["titulo_testimonial1"];
                      }?></h5>
                            <span><?php if (empty($_SESSION["profissao_testimonial1"])){
                        echo 'Ator';
                      } else{
                        echo $_SESSION["profissao_testimonial1"];
                      }?></span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Slk que sorvete bom om, da vontade de encher um balde e tomar com uma colherzinha pequenininha pra aproveitar o sabor, bem geladin hmmmmmmm delicia.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Jeff Bezos</h5>
                            <span>CEO da Amazon</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Visito essa sorveteria sempre que pego uma viagem longa e preciso refrescar, nada melhor que um sorvetinho gelado om, incrível.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="font-weight-bold m-0">Primo Rico</h5>
                            <span>Investidor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">G</span>ELICE</h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com/kleitin_mimoso/likes"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com/kleitin_mimoso/likes"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com/kleitin_mimoso/likes"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://twitter.com/kleitin_mimoso/likes"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Visite Nossa Loja</h5>
                            <p class="mb-2">R. Raimundo Firmino, 400. Mossoró - RN</p>
                            <p class="mb-0">+55 40028922</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Horário de funcionamento</h5>
                            <p class="mb-2">Segunda – Sábado, 08hrs – 17hrs</p>
                            <p class="mb-0">Domingos - Fechado</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">IFRN</a>. Todos os direitos reservados. Template por <a href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>