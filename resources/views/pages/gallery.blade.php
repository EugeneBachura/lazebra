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
    <link rel="stylesheet" href="{{ url('css/gallery-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/gallery-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-gallery.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')
    @include('pages.include.header')
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="{{url('/')}}" class="breadcrumbs__link">Главная</a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">Галерея</h1>
        </div>
    </div>
    @if ($galleries != null)
        <div class="gallery-list">
        @foreach ($galleries as $title => $gallery)
            <div class="gallery-list__item">
                <div class="gallery-list__bg" style="background-image: url('/{{$gallery[1]}}');"></div>
                <a href="{{$gallery[2]}}"><h3 class="gallery-list__title">{{$title}}</h3></a>
                <a href="{{$gallery[2]}}"><div class="gallery-list__item-btn">{!!$gallery[0]!!} фотографий</div></a>
            </div>
        @endforeach
        </div>
    @endif
@endsection

@section('scripts')
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
@endsection

    
    