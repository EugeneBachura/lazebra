@extends('layouts.main')
@section('title',$title)

@section('description',$description)

@section('css')
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('/css/popup-cities.css') }}">
    <link rel="stylesheet" href="{{ url('/css/modile/popup-cities.css') }}">
    
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/article.css') }}">
    <link rel="stylesheet" href="{{ url('css/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/article.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-blog-article.css') }}">
    <link rel="stylesheet" href="{{ url('css/add.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')    
    @include('pages.include.header')
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="{{url('/')}}" class="breadcrumbs__link">Главная</a>
        <a href="{{url()->current()}}/" class="breadcrumbs__link">{{$h1}}</a>
    </div>
    <!-- <div class="title">
        <div class="title__group">
            <h1 class="title__title">Фабрика автомобильных чехлов Лазебра</h1>
        </div>
    </div> -->

    <article>
        <div class="article_content">
            <h1>{{$h1}}</h1>
            {!! $content !!}
        </div>

        <div class="article_nav">
            <div class="article_nav__block">
                <p>Содержание:</p>
            </div>
        </div>
    </article>

@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script type="text/javascript">
            $('article h2').each(function(){
                var thisText = $(this).text();
                var anchorText2 = thisText.replace(/ /g, "-");
                var anchorText3 = anchorText2.replace(".", "");
                var anchorText4 = anchorText3.replace("?", "");
                var anchorText5 = anchorText4.replace("!", "");
                var anchorText = anchorText5.replace(".", "");
                var anchorLink = '<div class="article_nav__item"><a id="' + anchorText + '"></a></div>';
                var anchorText = '<div class="article_nav__item"><a href="#' + anchorText + '">' + thisText + '</a></div>'; 
                $(this).before(anchorLink);
                $(anchorText).appendTo('.article_nav__block');
            });

            $('.article_nav__block a').on( 'click', function(){ 
                var el = $(this);
                var dest = el.attr('href');
                if(dest !== undefined && dest !== '') { 
                    $('html').animate({ 
                        scrollTop: $(dest).offset().top - 90
                    }, 500 
                    );
                }
                return false;
            });
    </script>
@endsection