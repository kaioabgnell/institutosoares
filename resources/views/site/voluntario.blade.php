@extends('site.layouts.site')

@section('before-content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets/images/bg-header.png);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Voluntário</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>Voluntário</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->


<section class="become-volunteer-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Faça Parte</span>
            <h2 class="section-title__title" id="titleMainCourse">Seja voluntário e ajude a<br>construir um futuro melhor</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer-page__left">
                    <div class="become-volunteer-page__img">
                        <img src="{{ url('assets/images/voluntario.png')}}" alt="Instituto Elon Soares">
                    </div>
                    <h3 class="become-volunteer-page__title">Instituto Elon Soares</h3>
                    <p class="become-volunteer-page__text">O Instituto Elon Soares acredita que a transformação social começa com a união de pessoas dispostas a fazer a diferença. Estamos em busca de voluntários que compartilhem do nosso propósito de levar acolhimento, educação e oportunidades para quem mais precisa</p>
                    <p class="become-volunteer-page__text">Ao se juntar a nós, você contribui diretamente para o desenvolvimento de famílias, crianças e jovens em situação de vulnerabilidade, impactando positivamente toda a comunidade.
                        <br>
                        Nosso espaço foi pensado com carinho: salas equipadas, ambiente acolhedor e uma estrutura pronta para receber você de braços abertos.</p>
                    <ul class="become-volunteer-page__list list-unstyled">
                        <li>
                            <div class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="text">
                                <p>Apoio em aulas e oficinas educativas</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="text">
                                <p>Organização de eventos e campanhas solidárias</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="text">
                                <p>Auxílio administrativo e logístico</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="text">
                                <p>Atendimento e recepção dos participantes
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="text">
                                <p>Apoio em projetos de capacitação profissional
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="become-volunteer-page__phone">
                        <div class="become-volunteer-page__phone-icon">
                            <span class="icon-chat"></span>
                        </div>
                        <div class="become-volunteer-page__phone-text">
                            <p>Telefone</p>
                            <a href="tel:6232531555">(62) 3253-1555</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer-page__right">

                    @if(session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                setTimeout(() => {
                                    const el = document.getElementById('titleMainCourse');
                                    if(el) {
                                        // Scroll suave para o topo do elemento
                                        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                                    }
                                }, 100); // espera 100ms para garantir renderização
                            });
                        </script>
                    @endif


                    <form action="{{ route('voluntariosdoacoes.doar') }}" method="POST" class="helping-one__right-form become-volunteer-page__form">
                        @csrf
                        <h1 style="font-size: 20px;text-align: center;margin-bottom: 29px;">Preencha o formulário</h1>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Nome Completo" required>
                                <input type="hidden" name="tipo" value="1">
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






    
@endsection