@extends('site.layouts.site')

@section('before-content')



 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header__bg"
        style="background-image: url(assets/images/bg-header.png);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Blogs</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>Blogs</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->


<section class="events-page">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <!--Events One Single-->
                <div class="events-one__single">
                    <div class="events-one__img" style="background: url({{ asset('storage/' . $blog->imagem) }});    width: 100%;height: 400px;background-size: cover;">
                        
                        <div class="events-one__date-box">
                            <p>{{ $blog->created_at->format('d') }} <br> {{ $blog->created_at->format('M') }}</p>
                        </div>
                        <div class="events-one__bottom">
                            <h3 class="events-one__bottom-title"><a href="{{ url('blog/' . $blog->slug)}}">{{ $blog->titulo }}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection