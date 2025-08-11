@extends('site.layouts.site')

@section('before-content')



 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header__bg"
        style="background: #b6b623;"></div>
    <!-- /.page-header__bg -->
    <div class="container curso">
        <h2 class="title-curso">{{ $curso->nome}}</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>{{ $curso->nome}}</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->


<section class="event-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="events-details__img text-center">
                    <img src="{{ asset('storage/' . $curso->imagem) }}" alt="{{ $curso->nome}}" style="width: 500px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="event-details__left">
                    <div class="event-details__top-content">
                        <h2 class="event-details__title" id="nomeCurso">{{ $curso->nome}}</h2>
                        <p class="event-details__text-1">{!! $curso->descricao !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="event-details__right">
                    <div class="event-details__right-sidebar">
                        <div class="event-details__right-sidebar-title">
                            <h4>Pré Inscrição</h4>
                        </div>

                        @if(session('success'))
                            <div id="success-alert" class="alert alert-success">
                                {{ session('success') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    setTimeout(() => {
                                        const el = document.getElementById('nomeCurso');
                                        if(el) {
                                            // Scroll suave para o topo do elemento
                                            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                                        }
                                    }, 100); // espera 100ms para garantir renderização
                                });
                            </script>
                        @endif

                        
                        <form action="{{ route('pre.inscricao') }}" method="POST" class="helping-one__right-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="nome" placeholder="Nome Completo" required>
                                    <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                                    <input type="hidden" name="url" value="{{ $curso->url }}">
                                </div>
                                <div class="col-lg-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="telefone" placeholder="Telefone" required>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn helping-one__right-btn">
                                        <i class="fas fa-arrow-circle-right"></i> Quero participar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="event-details__right-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.9878193125114!2d-49.417107123947474!3d-16.627380484135927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935e609b16e0161b%3A0x956e8fecbd0365d5!2sR.%20ES-16%2C%20Trindade%20-%20GO%2C%2075382-291!5e0!3m2!1spt-BR!2sbr!4v1753555461763!5m2!1spt-BR!2sbr" class="event-details__map-box" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










@endsection