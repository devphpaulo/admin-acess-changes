<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gelice - Nossos Produtos</title>
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
                        <a class="text-white px-3" href="https://trabalho-final.weinesousa.repl.co/admin/index.php">LOGIN COMO ADM</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
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
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
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


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Veja agora mesmo nossos produtos!</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white btn btn-primary py-md-3 px-md-5 mt-2" href="index.php">Voltar para a Página Inicial</a></p>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">123 Street, New York, USA</p>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
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