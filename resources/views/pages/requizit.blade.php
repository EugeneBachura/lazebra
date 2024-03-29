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
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
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
        <a href="{{$prinfo_url}}" class="breadcrumbs__link">Правовая информация</a>
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

            <div class="requisites">
                <div class="requisites_title">{{$subtitle}}</div>
                <div class="requisites_block">
                    @foreach ($requisites as $requisit)
                        <div class="requisites_block__item">
                            <div>{{$requisit['title']}}:</div>
                            <div>{{$requisit['text']}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </article>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
@endsection

