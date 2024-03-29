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
    <link rel="stylesheet" href="{{ url('css/blog.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/blog.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-blog.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')
    @include('pages.include.header')
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="/" class="breadcrumbs__link">Главная</a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">{{$title}}</h1>
        </div>
    </div>
    <div class="blog">
        <div class="blog__items">

                @foreach ($posts as $post)
                    <?php $post_url = url('blog/'.DB::table('categories')->where('id', $post['cat_id'] )->value('url').'/'.$post['url'] ) ?>
                    <div class="blog__item" >
                        <a href="{{$post_url}}/"><div class="blog__img" style="background: url('/{{$post['img']}}') center top no-repeat;"></div></a>
                        <div class="blog__description">
                            <a href="{{$post_url}}/"><h3 class="blog__subtitle">{{$post['title']}}</h3></a>
                            <div class="blog__text">{{$post['prew_text']}}</div>
                        </div>
                    </div> 
                @endforeach
                
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>  
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
@endsection

    