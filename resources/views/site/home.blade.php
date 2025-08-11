@extends('site.layouts.site')

@section('before-content')

<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,"effect": "fade","pagination": {"el": "#main-slider-pagination","type": "bullets","clickable": true},"navigation": {"nextEl": "#main-slider__swiper-button-next","prevEl": "#main-slider__swiper-button-prev"},"autoplay": {"delay": 5000}}'>
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ asset('storage/' . $banner->imagem) }});">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-slider__content">
                                    <h2>{{ $banner->nome}}</h2>
                                    {{-- <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i> Saiba mais</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="main-slider__counter">
            <ul class="main-slider__counter-box list-unstyled">
                <li>
                    <h3 class="main-sldier__counter-digit">+200</h3>
                    <span class="main-slider__counter-text">Voluntários cadastrados</span>
                </li>
                <li>
                    <h3 class="main-sldier__counter-digit">+800</h3>
                    <span class="main-slider__counter-text">Pessoas formadas</span>
                </li>
            </ul>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                    class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                    class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

<!--Welcome One Start-->
<section class="welcome-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img-box">
                        <img src="assets/images/elonsoares.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Transformando vidas</span>
                        <h2 class="section-title__title">O grupo soares sempre acreditou</h2>
                    </div>
                    <p class="welcome-one__right-text">Que o verdadeiro crescimento de uma
                        empresa não se mede apenas pelo sucesso
                        dos negócios, mas pelo impacto que gera na
                        vida das pessoas. Em cada uma das
                        empresas que compõem o Grupo, investimos
                        na qualificação dos profissionais que fazem
                        parte daquela história, pois sabemos que a
                        educação transforma vidas. É por meio dela
                        que se mudam destinos, abrindo novas
                        portas e criando novas possibilidades.</p>
                    <div class="welcome-one__our-mission-and-story">
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>O que oferecemos</h3>
                            <p class="welcome-one__our-mission-and-story-text">Mais de 10 cursos gratuitos para capacitação profissional</p>
                        </div>
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>Formações</h3>
                            <p class="welcome-one__our-mission-and-story-text">Formação completa com aulas teóricas e práticas.</p>
                        </div>
                    </div>
                    <a href="{{ url('quem-somos') }}" class="welcome-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Causes One Start-->
<section class="causes-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Uma porta aberta para novas possibilidades.</span>
            <h2 class="section-title__title">Cursos <span style="color: #b6b623;">disponíveis</span></h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    @foreach ($cursos as $curso)
                        <div class="causes-one__single wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="causes-one__img">
                                <div class="causes-one__img-box">
                                    <img src="{{ asset('storage/' . $curso->imagem) }}" alt="">
                                    <a href="{{ url('curso/' . $curso->url)}}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title">
                                    <a href="{{ url('curso/' . $curso->url)}}">{{ $curso->nome }}</a>
                                </h3>
                                <p class="causes-one__text">{{ \Illuminate\Support\Str::limit($curso->descricao, 100) }}</p>

                                <a href="{{ url('curso/' . $curso->url)}}" class="querocadastrar-btn">Quero me inscrever</a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes One End-->

<!--Join One Start-->
<section class="join-one">
    <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="join-one__inner">
                    <h2 class="join-one__title">Amplo espaço com estacionamento, jardim, área para atividades esportivas e laboratórios práticos para treinamento</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-one">
    <div class="gallery-one__container-box clearfix">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/insti-1.png" alt="">
                    
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/insti-2.png" alt="">
                    
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/insti-3.png" alt="">
                    
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/insti-4.png" alt="">
                    
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="assets/images/insti-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="helping-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Doações</span>
            <h2 class="section-title__title" id="suacontrinuicao">Sua contribuição <span style="color: #b6b623;">é</span> fundamental</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="helping-one__left">
                    <h3 class="helping-one__title">Junte-se a nós!</h3>
                    <p class="helping-one__text">O Instituto Elon Soares está em busca de parceiros para ampliar essa
                        iniciativa e gerar ainda mais oportunidades para quem precisa. Ao se unir a
                        nós, você estará investindo não apenas em educação, mas na construção
                        de um futuro mais justo e promissor para muitas famílias.</p>
                    <ul class="helping-one__left-list list-unstyled">
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Preencha o formulário ao lado e entraremos em contato.</p>
                            </div>
                        </li>
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Faça patrocinador desse instituto.</p>
                            </div>
                        </li>
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Sua contribuição vai ajudar muito.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="helping-one__left-img">
                        <img src="assets/images/img-doacao.png" alt="">
                        <div class="helping-one__left-icon-box">
                            <span class="icon-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="helping-one__right">
                    @if(session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                setTimeout(() => {
                                    const el = document.getElementById('suacontrinuicao');
                                    if(el) {
                                        // Scroll suave para o topo do elemento
                                        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                                    }
                                }, 100); // espera 100ms para garantir renderização
                            });
                        </script>
                    @endif

                    <form action="{{ route('voluntariosdoacoes.doar') }}" method="POST" class="helping-one__right-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Nome Completo" required>
                                <input type="hidden" name="tipo" value="2">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Telefone" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Escreva sua mensagem"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn helping-one__right-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Quero participar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Helping One End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one-bg"
        style="background-image: url(assets/images/backgrounds/testimonial-1-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Depoimentos</span>
                        <h2 class="section-title__title">Vozes que Inspiram</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Participar do Instituto é servir com propósito. Ver vidas mudando é gratificante</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-name">
                                    <h3>Ana Paula</h3>
                                    <p>Voluntária</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Aqui encontrei uma forma real de impactar pessoas com meu conhecimento.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-name">
                                    <h3>Carlos Henrique</h3>
                                    <p>Voluntário</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Sou voluntária com orgulho. Cada turma é uma nova esperança.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-name">
                                    <h3>Juliana Rocha</h3>
                                    <p>Voluntária</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Contribuir com o Instituto me mostra, todo dia, o poder da solidariedade.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-name">
                                    <h3>Fernando Silva</h3>
                                    <p>Voluntário</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Help Them Start-->
<section class="help-them">
    <div class="help-them-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/help-them-bg.jpg)"></div>
    <div class="container">
        <div class="help-them__bottom">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-charity"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Educação que Transforma</h3>
                            <p>Capacitação gratuita para mudar histórias e fortalecer comunidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-generous"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Estrutura de Qualidade</h3>
                            <p>Ambiente moderno, com aulas teóricas e práticas em construção civil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-fundraiser"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Juntos por um Futuro Melhor</h3>
                            <p>Parcerias que geram oportunidades e promovem inclusão social real.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Help Them End-->

<section class="news-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Blog & Notícias</span>
                    <h2 class="section-title__title">Últimas notícias do Instituto Soares.
                    </h2>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="news-one__button-box">
                    <a href="{{ url('') }}" class="news-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Ver Todas</a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Lado Esquerdo: Primeiro Blog -->
            @if($blogs->count())
                <div class="col-xl-6 col-lg-6">
                    <div class="news-one__left">
                        <div class="news-one__img">
                            <img src="{{ asset('storage/' . $blogs[0]->imagem) }}" alt="{{ $blogs[0]->titulo }}">
                            <a href="{{ route('blogs.show', $blogs[0]->id) }}">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="news-one__bottom">
                            <ul class="list-unstyled news-one__meta">
                                <li>{{ $blogs[0]->created_at->format('d M, Y') }}</li>
                            </ul>
                            <h3 class="news-one__title">
                                <a href="{{ route('blogs.show', $blogs[0]->id) }}">{{ $blogs[0]->titulo }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
        
                <!-- Lado Direito: Próximos 3 Blogs -->
                <div class="col-xl-6 col-lg-6">
                    <div class="news-one__right">
                        @foreach($blogs->slice(1, 3) as $blog)
                            <div class="news-one__right-single">
                                <div class="news-one__right-img" style="background: url({{ asset('storage/' . $blog->imagem) }});min-width: 230px;width: 530px;height: 229px;background-size: cover;">
                                    
                                    <a href="{{ url('blog/' . $blog->slug) }}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                                <div class="news-one__right-content">
                                    <ul class="list-unstyled news-one__right-meta">
                                        <li>{{ $blog->created_at->format('d M, Y') }}</li>
                                    </ul>
                                    <h3 class="news-one__right-title">
                                        <a href="{{ url('blog/' . $blog->slug) }}">{{ $blog->titulo }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        
    </div>
</section>



@endsection