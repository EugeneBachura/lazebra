<?php 
use App\Models\FooterMenu;
use App\Models\Menu;
use App\Models\Brands;
use App\Models\BrandsFrame;
$main_menu = Menu::orderBy('id', 'ASC')->get();
$footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
$brands = Brands::orderBy('id', 'ASC')->get();
$brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
$model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
$frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
?>

@extends('layouts.main')
@section('title',"404")

@section('description',"")

@section('css')
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-login.css') }}">
    
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

    <article>
        <div class="page_404">
            <div class="page_404__img">
                <p>4</p>
                <div><img src="{{url('/img/cat.svg')}}"></div>
                <p>4</p>
            </div>
            <p>Страница не найдена!</p>
            <a href="{{url('/')}}">На главную</a>
        </div>
    </article>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
@endsection