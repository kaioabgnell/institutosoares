@extends('site.layouts.site')

@section('before-content')



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg"
                style="background-image: url(assets/images/bg-header.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>Quem Somos</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li class="color-thm-gray">/</li>
                    <li><span>Quem Somos</span></li>
                </ul>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Page Start-->
        <section class="about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-page__left">
                            <div class="about-page__img">
                                <img src="assets/images/resources/about-page-img-1.jpg" alt="">
                                <div class="about-page__trusted">
                                    <h3>Mais de <span>850</span> pessoas impactadas.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Institulo Elon Soares</span>
                                <h2 class="section-title__title">O grupo soares sempre acreditou</h2>
                            </div>
                            <p class="about-page__right-text">que o verdadeiro crescimento de uma
                                empresa não se mede apenas pelo sucesso
                                dos negócios, mas pelo impacto que gera na
                                vida das pessoas. Em cada uma das
                                empresas que compõem o Grupo, investimos
                                na qualificação dos profissionais que fazem
                                parte daquela história, pois sabemos que a
                                educação transforma vidas. É por meio dela
                                que se mudam destinos, abrindo novas
                                portas e criando novas possibilidades.</p>
                            <h3 class="about-page__right-title">Mais conhecimento, suporte e oportunidades.</h3>

                            <p class="about-page__right-text">Agora, damos um passo além com o
                                Instituto Elon Soares, que nasce do
                                propósito genuíno de retribuir à sociedade o
                                apoio e respeito que nos trouxeram até aqui.
                                Para nosso fundador, Sr. Elon Soares, as
                                pessoas sempre foram o centro de tudo. Ele
                                acredita que oferecer conhecimento e
                                qualificação, não apenas ajuda indivíduos,
                                mas fortalece famílias, impulsiona
                                comunidades e constrói um futuro mais
                                digno para todos.</p>

                            
                        </div>
                    </div>
                    <div class="col-xl-12" style="margin-top: 20px">
                        <div class="author-one">
                            <div class="author-one__image">
                                <img src="assets/images/elon.png" alt="" style="width: 100%">
                            </div>
                            <div class="author-one__content">
                                <h3>Instituto Elon Soares</h3>
                                <p>O Instituto Elon Soares chega para
                                    transformar vidas, oferecendo cursos
                                    gratuitos na área da construção civil. Nosso
                                    objetivo é criar um ambiente onde o
                                    aprendizado se traduza em oportunidades,
                                    promovendo inclusão e desenvolvimento para
                                    toda a comunidade. E uma nova via de acesso
                                    a uma vida mais próspera e independente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Page Start-->

        <section class="testimonial-one about-page-testimonial">
            <div class="testimonial-one-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-1-bg.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">O que oferecemos</span>
                                <h2 class="section-title__title">Uma porta aberta para novas possibilidades</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel owl-theme owl-carousel">
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <h1 class="testimonial-one__text">Mais de 10 cursos gratuitos para capacitação profissional.</h1>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <h1 class="testimonial-one__text">Formação completa com aulas teóricas e práticas.</h1>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <h1 class="testimonial-one__text">Estrutura moderna e equipada para o aprendizado.</h1>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <h1 class="testimonial-one__text">Impacto social: inclusão, novas possibilidades.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--Join One Start-->
        <section class="join-one join-one__about">
            <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="join-one__inner">
                            <h2 class="join-one__title">Por um futuro mais justoe cheio de oportunidades.<br>Seja um Voluntário</h2>
                            <a href="#" class="join-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Join One End-->

        <!--Counters One Start-->
        <section class="counters-one about-page-counter">
            <div class="container">
                <ul class="counters-one__box list-unstyled">
                    <li class="counter-one__single">
                        <h3 class="odometer" data-count="870">00</h3><span class="counter-one__letter">+</span>
                        <p class="counter-one__text">Voluntários</p>
                    </li>
                    <li class="counter-one__single">
                        <h3 class="odometer" data-count="480">00</h3>
                        <p class="counter-one__text">Cursos</p>
                    </li>
                    <li class="counter-one__single">
                        <h3 class="odometer" data-count="977">00</h3><span class="counter-one__letter">+</span>
                        <p class="counter-one__text">Atendimentos</p>
                    </li>
                    <li class="counter-one__single">
                        <h3 class="odometer" data-count="63">00</h3><span class="counter-one__letter">+</span>
                        <p class="counter-one__text">Patrocinadores</p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counters One Start-->

    
@endsection