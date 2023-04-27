<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ULPKS-Yiriwasso | Union Locale des Productrices de beurre de Karité Sanankoroba</title>
    <!-- fav icon -->
    <link href="/assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- animated-css -->
    <link href="/assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome-css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- owl-carrosel-css -->
    <link href="/assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <!-- offcanvas-menu-css -->
    <link href="/assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="">
    <header class="header-section">
        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="header-left-bar">
                            <ul class="contact-wrapper">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> yiriwasso2@gmail.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> +223 75 23 32 86</li>
                            </ul>
                        </div> <!-- header-left-bar -->
                    </div>
                </div> <!-- top-bar -->
            </div>
        </div> <!-- top-bar -->

        <nav class="navbar navbar-inverse hidden-sm hidden-xs">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/images/logo.png"
                            alt="image"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Accueil</a>

                        </li>
                        <li><a href="#">Boutique</a>

                        </li>
                        <li><a href="#">À propos </a>
                        </li>
                        <li><a href="#">Contact</i></a>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div> <!-- container -->
        </nav>

        <div class="navbar-header inline-block visible-sm visible-xs">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/images/logo-m.png" alt="image"></a>
        </div>
    </header> <!-- header-section -->

    <section class="slider-section">
        <h2 class="hidden">Presentation</h2>
        <div class="main-slider">
            <div id="main-slider-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider-one"></div>

                        <div class="content text-center">
                            <div class="large-text" data-animation="animated fadeInDown">ULPKS • YIRIWASSO<br>

                                Union Locale des Productrices de Karité Sanankoroba</div>

                            <div class="guard">
                                <p class="small-text" data-animation="animated fadeInDown">L’Union Locale des
                                    Productrices de beurre de Karité Sanankoroba (ULPKS-Yiriwasso) en bambara la maison
                                    du
                                    développement, est une organisation féminine apolitique et non gouvernementale.<br>
                                    <br>
                                </p>
                            </div>
                            <div class="link-button" data-animation="animated fadeInUp">
                                <a href="#" class="btn btn-primary">Boutique</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-two"></div>

                        <div class="content text-right">
                            <div class="large-text" data-animation="animated fadeInDown">Notre Vision <br>
                            </div>

                            <div class="guard">
                                <p class="small-text" data-animation="animated fadeInLeft">Faire de l’entreprenariat
                                    féminin une réalité <br> pour améliorer les conditions de vie socioéconomiques des
                                    femmes
                                    rurales
                                    des communes de Sanankoroba, Dialakoroba et Bougoula. <br> </p>
                            </div>

                            <div class="link-button" data-animation="animated fadeInUp">
                                <a href="#" class="btn btn-primary">Boutique</a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-three"></div>

                        <div class="content text-left">
                            <div class="large-text" data-animation="animated fadeInDown" style="color: white">Améliorer
                                les conditions<br>
                                de vie des femmes productrices <br>
                                et de la population des 3 communes de Bougoula, Sanankoroba et Dialakoroba

                            </div>

                            <div class="guard">
                                <p class="small-text" data-animation="animated fadeInRight"
                                    style="color:rgba(168, 176, 172, 0.804);">

                                    Dialakoroba et
                                    Sanankoroba grâce à une augmentation des revenus tirés de la transformation, de la
                                    vente du beurre amélioré certifié bio
                                    équitable et des sous produits dérivés du karité. <br> <br></p>
                            </div>

                            <div class="link-button" data-animation="animated fadeInUp">
                                <a href="#" class="btn btn-primary">Boutique</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#main-slider-carousel" role="button" data-slide="prev"><i
                        class="fa fa-angle-left" aria-hidden="true"></i></a>

                <a class="right carousel-control" href="#main-slider-carousel" role="button" data-slide="next"><i
                        class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section> <!-- slider-section -->


    <section class="project-section section-padding">
        <div class="container text-center">
            <div class="section-title text-center">
                <h2>Nos<span class="text-color"> Produits</span></h2>
            </div> <!-- section-title -->

            <div class="portfolio gallery-grid">
                <div class="row">

                    <!--end portfolio sorting -->

                    <div id="lightBox" class="gallery-wrapper">
                        <ul class="portfolio-items courses list-unstyled" id="grid">
                            <li class="col-lg-4 col-sm-6" data-groups='["simpsons"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/P1.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="/img/P1.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/P2.JPG" alt="">

                                    <div class="hover-view">
                                        <a href="/img/P2.JPG"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/P3.JPG" alt="">
                                    <div class="hover-view">
                                        <a href="/img/P3.JPG"><i class="fa fa-picture-o"></i></a>
                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>
                        </ul>
                        <!--end portfolio grid -->
                    </div> <!-- gallery-wrapper -->
                </div>
                <!--end row -->
            </div>
        </div> <!-- container -->
    </section> <!-- project-section -->

    <section class="counting-section text-center">
        <div class="container">
            <h2 class="hidden">title</h2>

            <div class="counting-pusher">
                <div class="row">
                    <div class="col-md-4 col-sm-64">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">25</span>
                            </div>
                            <p>Years of experience</p>
                        </div> <!-- counting-wrapper -->
                    </div>

                    <div class="col-md-4 col-sm-64">
                        <div class="counting-wrapper">
                            <div class="count-description">
                                <span class="timer">48</span>
                            </div>
                            <p>Team Members</p>
                        </div> <!-- counting-wrapper -->
                    </div>

                    <div class="col-md-4 col-md-offset-0 col-sm-4">
                        <div class="counting-wrapper last-wrapper">
                            <div class="count-description">
                                <span class="timer">33</span>
                            </div>
                            <p>Awards Wins</p>
                        </div> <!-- counting-wrapper -->
                    </div>
                </div>
            </div> <!-- /.counting-pusher -->
        </div>
    </section> <!-- counting-section -->



    <section class="growing-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 visible-sm visible-xs">
                    <div class="caption">
                        <img src="/img/home.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-7 col-sm-12">
                    <div class="content-wrapper">
                        <h3>Ensemble, les femmes de l'ULPKS-Yiriwasso transforment le beurre de karité en or et ouvrent
                            la voie à un avenir prospère
                            pour leur communauté !</h3>

                        <p>Au fil des années, l'ULPKS-Yiriwasso est devenue une référence dans la production et la
                            commercialisation du beurre de
                            karité dans la région de Sanankoroba. Cette association travaille avec détermination pour
                            améliorer les conditions de
                            vie de ses membres et contribuer au développement économique de la région.</p>

                        <button class="btn btn-primary">Read More</button>

                        <button class="btn btn-default">Our History</button>
                    </div> <!-- content-wrapper -->
                </div>

                <div class="col-md-5 hidden-sm hidden-xs">
                    <div class="caption wow slideInRight" data-wow-delay="0.2s">
                        <img src="/img/home.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- growing-section -->



    <section class="project-section section-padding">
        <div class="container text-center">
            <div class="section-title text-center">
                <h2><span class="text-color">Galerie</span></h2>
            </div> <!-- section-title -->

            <div class="portfolio gallery-grid">
                <div class="row">

                    <!--end portfolio sorting -->

                    <div id="lightBox" class="gallery-wrapper">
                        <ul class="portfolio-items courses list-unstyled" id="grid">
                            <li class="col-lg-4 col-sm-6" data-groups='["simpsons"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/2.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="/img/2.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/4.JPG" alt="">

                                    <div class="hover-view">
                                        <a href="/img/4.JPG"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/5.JPG" alt="">

                                    <div class="hover-view">
                                        <a href="/img/5.JPG"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["futurama"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/RC3.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="/img/RC3.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["simpsons"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/RC1.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="/img/RC1.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>

                            <li class="col-lg-4 col-sm-6" data-groups='["people"]'>
                                <figure class="portfolio-item gallery-caption">
                                    <img src="/img/RC5.jpg" alt="">

                                    <div class="hover-view">
                                        <a href="/img/RC5.jpg"><i class="fa fa-picture-o"></i></a>

                                        <span class="border-one"></span>
                                        <span class="border-two"></span>
                                        <span class="border-three"></span>
                                        <span class="border-four"></span>
                                    </div>
                                </figure>
                            </li>
                        </ul>
                        <!--end portfolio grid -->
                    </div> <!-- gallery-wrapper -->
                </div>
                <!--end row -->
            </div>
        </div> <!-- container -->
    </section> <!-- project-section -->






    <section class="quote-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5">
                    <div class="section-title">
                        <h2> Nous<span class="text-color"> Contactez</span></h2>
                    </div> <!-- section-title -->

                    <form class="quote-form text-left">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control" required=""
                                        placeholder="First name..">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email" required=""
                                        placeholder="Email">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="selection">
                                    <select name="one" class="dropdown-select">
                                        <option value="">- Select Service -</option>
                                        <option value="1">Service one</option>
                                        <option value="2">Service two</option>
                                        <option value="3">Service three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button class="subscribeBtn" type="submit">Get Quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- quote-section -->




    <section class="double-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-section">
                        <div class="section-title text-center">
                            <h2>Nos <span class="text-color">Partenaires</span></h2>
                        </div> <!-- section-title -->

                        <div class="partner-wrapper">
                            <ul class="text-center">
                                <li class="wow zoomIn"><img src="/assets/images/partner/p1.jpg" alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.1s"><img src="/assets/images/partner/p2.jpg"
                                        alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.2s"><img src="/assets/images/partner/p3.jpg"
                                        alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.3s"><img src="/assets/images/partner/p4.jpg"
                                        alt=""></li>
                                <li class="wow zoomIn" data-wow-delay="0.4s"><img src="/assets/images/partner/p5.jpg"
                                        alt=""></li>
                            </ul>
                        </div> <!-- partner-wrapper -->
                    </div> <!-- partner-section -->
                </div>


            </div>
        </div>
    </section> <!-- double-section -->




    <section class="testimonial-section">
        <div class="container">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="/assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>

                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="/assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>


                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 hidden-sm hidden-xs">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="/assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>


                                </div> <!-- testimonial-wrapper -->
                            </div>

                            <div class="col-md-6">
                                <div class="testimonial-wrapper">
                                    <span class="caption"><img src="/assets/images/quote.png" alt=""></span>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius mod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>



                                </div> <!-- testimonial-wrapper -->
                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev"><img
                        src="/assets/images/left-angel.png" alt=""></a>
                <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next"><img
                        src="/assets/images/right-angel.png" alt=""></a>
            </div>
        </div>
    </section> <!-- testimonial-section -->




    <footer class="footer-section">
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-wrapper first-wrapper">
                            <h3>ULPKS-Yiriwasso</h3>

                            <p>Accroitre la qualité marchande des produits<br> livrés aux consommateurs. </p>

                            <ul class="social-icon">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            </ul> <!-- social-icon -->
                        </div> <!-- footer-wrapper -->
                    </div>


                </div>
            </div>
        </div> <!-- footer-container -->


        <div class="second-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="caption"><img src="/assets/images/footer-logo.png" alt=""></div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="contact-wrapper">
                            <ul>
                                <li>

                                    De l’ex arrondissement <br> de Sanankoroba cercle de Kati Région de Koulikoro.

                                </li>

                                <li>
                                    Tél: (00223) 75 23 32 86/ 73 70 30 90
                                    Derrière l’ex AMADER
                                </li>


                            </ul>
                        </div> <!-- contact-wrapper -->
                    </div>

                </div>

                <hr>
            </div>

            <div class="copy-right text-center">
                <p>2023 &copy; All Rights Reserved by <a href="#">ULPKS-Yiriwasso</a></p>
            </div> <!-- copy-right -->
        </div> <!-- second-footer -->
    </footer> <!-- footer-section -->

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.inview.min.js"></script>
    <script src="/assets/js/portfolio.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/lightbox.js"></script>
    <script src="/assets/owl-carrosel/owl.carousel.min.js"></script>
    <script src="/assets/js/slider.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
