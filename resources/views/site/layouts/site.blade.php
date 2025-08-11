<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instituto Elon Soares - Grupo Soares</title>
    <meta name="description" content="Devolvendo a comunidade o que há de melhor no mundo, amor e trabalho! " />
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/halpes-icons/style.css')}}">
    <link rel="stylesheet" href="{{ url('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{ url('assets/css/halpes.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/css/halpes-responsive.css')}}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ url('assets/images/favicon.png') }}" alt="Instituto Elson Soares" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__logo">
                <a href="{{ url('') }}">
                    <img src="{{ url('assets/images/logo-inst-soares.png') }}" alt="" style="filter: brightness(0) invert(1);">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="main-menu-wrapper__bottom">
                    <nav class="main-menu">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li><a href="{{ url('') }}">Home</a></li>
                                <li><a href="{{ url('quem-somos') }}">Quem Somos</a></li>
                                <li><a href="{{ url('cursos') }}">Cursos</a></li>
                                <li><a href="{{ url('voluntario') }}">Voluntário</a></li>
                                <li><a href="{{ url('/#suacontrinuicao')}}">Doações</a></li>
                                <li><a href="{{ url('blogs') }}">Blog</a></li>
                                <li><a href="{{ url('contatos') }}">Contatos</a></li>
                            </ul>
                            <div class="main-menu__right">
                                <div class="main-menu__phone-contact">
                                    <div class="main-menu__phone-icon">
                                        <span class="icon-chat"></span>
                                    </div>
                                    <div class="main-menu__phone-number">
                                        <p>Fale Conosco</p>
                                        <a href="tel:6232531555">(62) 3253-1555</a>
                                    </div>
                                </div>
                                <a href="{{ url('/#suacontrinuicao')}}" class="main-menu__donate-btn"><i class="fa fa-heart"></i>Doações </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('before-content')

        @yield('content')

        @yield('after-content')


        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/footer-bg.jpg)"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">Instituto Elson Soares </h3>
                                <p class="footer-widget__text">O Instituto Elon Soares chega para transformar vidas, oferecendo cursos gratuitos na área da construção civil. </p>
                                <a href="{{ url('/#suacontrinuicao') }}" class="footer-widget__about-btn"><i class="fa fa-heart"></i>Doações </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Instituto</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="{{ url('') }}">Home</a></li>
                                    <li><a href="{{ url('quem-somos') }}">Quem Somos</a></li>
                                    <li><a href="{{ url('cursos') }}">Cursos</a></li>
                                    <li><a href="{{ url('voluntario') }}">Voluntário</a></li>
                                    <li><a href="{{ url('/#suacontrinuicao')}}">Doações</a></li>
                                    <li><a href="{{ url('blogs') }}">Blog</a></li>
                                    <li><a href="{{ url('contatos') }}">Contatos</a></li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contatos</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="icon-chat"></i>
                                        </div>
                                        <div class="text">
                                            <p>
                                                <span>Fale Conosco</span>
                                                <a href="tel:6232531555">(62) 3253-1555</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-message"></i>
                                        </div>
                                        <div class="text">
                                            <p>
                                                <span>Email</span>
                                                <a href="mailto:marketing@soaresempresas.com.br">marketing@soaresempresas.com.br</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-address"></i>
                                        </div>
                                        <div class="text">
                                            <p><span>Localização: </span>R. ES-16 - St. Jardim Scala, Trindade - GO, 75.380-000</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-logo-social">
                                    <div class="site-footer__bottom-logo">
                                        <a href="{{ url('') }}">
                                            <img src="assets/images/logo-inst-soares.png" width="190px" style="filter: brightness(0) invert(1);    padding: 25px;">
                                        </a>
                                    </div>
                                    <div class="site-footer__bottom-social">
                                        <a href="https://www.instagram.com/institutoelonsoares/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="site-footer__bottom-copy-right">
                                    <p>© Copyright 2025. Desenvolvido por <a href="#">Fly Digital</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ url('') }}" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:marketing@soaresempresas.com.br">marketing@soaresempresas.com.br</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:6232531555">(62) 3253-1555</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a target="_blank" href="https://www.instagram.com/institutoelonsoares/" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ url('assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{ url('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{ url('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{ url('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{ url('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{ url('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{ url('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{ url('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{ url('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{ url('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- template js -->
    <script src="{{ url('assets/js/halpes.js')}}"></script>
</body>

</html>