@extends('site.layouts.site')

@section('before-content')



 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets/images/bg-header.png);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Cursos</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>Cursos</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->

<!--News Page Start-->
<section class="news-page">
    <div class="container">
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <!--News Two Single-->
                    <div class="news-two__single">
                        <div class="news-two__img-box">
                            <div class="news-two__img">
                                <img src="{{ asset('storage/' . $curso->imagem) }}" alt="{{ $curso->nome }}">
                                <a href="{{ url('curso/' . $curso->url)}}">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-two__content">
                            <h3>
                                <a href="{{ url('curso/' . $curso->url)}}">{{ $curso->nome }}</a>
                            </h3>
                            <p class="news-two__text">{{ \Illuminate\Support\Str::limit($curso->descricao, 100) }}</p>

                            <a href="{{ url('curso/' . $curso->url)}}" class="querocadastrar-btn">Quero me inscrever</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                <nav aria-label="Paginação de imóveis" class="pt-55">
                    <ul class="pagination">
                        <!-- Anterior -->
                        <li class="page-item {{ $cursos->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $cursos->previousPageUrl() }}" {{ $cursos->onFirstPage() ? 'tabindex="-1"' : '' }}>Antes</a>
                        </li>
                        <!-- Páginas -->
                        @foreach ($cursos->getUrlRange(1, $cursos->lastPage()) as $page => $url)
                            <li class="page-item {{ $cursos->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                        <!-- Próximo -->
                        <li class="page-item {{ $cursos->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $cursos->nextPageUrl() }}" {{ $cursos->hasMorePages() ? '' : 'tabindex="-1"' }}>Próximo</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</section>
<!--News Page End-->
@endsection