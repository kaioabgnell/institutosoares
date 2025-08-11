@extends('site.layouts.site')

@section('before-content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets/images/bg-header.png);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Contatos</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>Contatos</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->


<!--Contact page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Contatos</span>
            <h2 class="section-title__title" id="faleconosco">Fale Conosco<br>Estamos Aqui por Você</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__left">
                    <div class="contact-page__img">
                        <img src="assets/images/contatos.png" alt="">
                    </div>
                    <p class="contact-page__text">O Instituto Elon Soares transforma vidas por meio da educação gratuita e ações sociais para toda a comunidade. Nosso espaço foi pensado para acolher, capacitar e gerar oportunidades reais. Fale conosco e venha fazer parte dessa missão!</p>
                    <div class="contact-page__contact-info">
                        <ul class="contact-page__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <div class="text">
                                    <p>Telefone</p>
                                    <a href="tel:(62) 3253-1555">(62) 3253-1555</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p>Email</p>
                                    <a href="mailto:marketing@soaresempresas.com.br">marketing@soaresempresas.com.br</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-address"></span>
                                </div>
                                <div class="text">
                                    <p>Localização</p>
                                    <h5>R. ES-16 - St. Jardim Scala,<br>
                                        Trindade - GO, 75a380-000</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__form">
                    @if(session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                setTimeout(() => {
                                    const el = document.getElementById('faleconosco');
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
                                <input type="hidden" name="tipo" value="3">
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
                                    <i class="fas fa-arrow-circle-right"></i> Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact page End-->

<!--Contact Page Google Map Start-->
<section class="contact-page-google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.9878193125114!2d-49.417107123947474!3d-16.627380484135927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e609b16e0161b%3A0x956e8fecbd0365d5!2sR.%20ES-16%2C%20Trindade%20-%20GO%2C%2075382-291!5e0!3m2!1spt-BR!2sbr!4v1753555461763!5m2!1spt-BR!2sbr" class="contact-page-google-map__one" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--Contact Page Google Map End-->



    
@endsection