@extends('site.layouts.site')

@section('before-content')


 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header__bg"
        style="background: #b6b623;"></div>
    <!-- /.page-header__bg -->
    <div class="container curso">
        <h2 class="title-curso">{{ $blog->titulo}}</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="{{ url('blogs')}}">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>{{ $blog->titulo}}</span></li>
        </ul>
    </div>
</section>


 <!--News Details Start-->
 <section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="{{ asset('storage/' . $blog->imagem) }}" alt="">
                    </div>
                    <div class="news-details__content">
                        <ul class="list-unstyled news-details__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> Instituto Elon Soares </a></li>
                        </ul>
                        <h3 class="news-details__title">{{ $blog->titulo}} </h3>
                        <p class="news-details__text-one">
                            {!! $blog->descricao !!}
                        </p>                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Últimas Notícias</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($recents as $recent)
                            <li>
                                <div class="sidebar__post-image">
                                    <img src=" {{ asset('storage/' . $recent->imagem) }}" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{ url('blog/' . $recent->slug)}}">{{ $recent->titulo}}</a>
                                    </h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Details End-->


@endsection