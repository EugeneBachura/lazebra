@extends('layouts.main')

@section('title',$title)

@section('description',$description)

@section('css')
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('/css/popup-cities.css') }}">
    <link rel="stylesheet" href="{{ url('/css/modile/popup-cities.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
    
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/advantages.css') }}">
    <link rel="stylesheet" href="{{ url('css/big-header.css') }}">
    <link rel="stylesheet" href="{{ url('css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/constructor.css') }}">
    <link rel="stylesheet" href="{{ url('css/tabs.css') }}">
    <link rel="stylesheet" href="{{ url('css/kiagallery.css') }}">
    <link rel="stylesheet" href="{{ url('css/text.css') }}">
    <link rel="stylesheet" href="{{ url('css/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/advantages.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/big-header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/tabs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/kiagallery.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/text.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-KIA-spectra.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')
    <div class="big-header">
        @include('pages.include.header')
        @include('pages.include.advantages')
    </div>
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="/" class="breadcrumbs__link">Главная</a>
        <a href="{{$covers_url}}/" class="breadcrumbs__link">Модельные авточехлы</a>
        <a href="{{$brand_url}}/" class="breadcrumbs__link">Чехлы на сиденья {{$name_brand}}</a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">{{$h1}}</h1>
            <div class="title__subtitle">{{$subtitle}}</div>
        </div>
    </div>
    <div class="constructor"></div>
    <div class="tabs" id="tabsKIAspectra">
    <ul>
        <li><a href="#tabs-1"><h3 class="tabs__title">Комплектность</h2></a></li>
        <li><a href="#tabs-2"><h3 class="tabs__title">Описание</h2></a></li>
        <li><a href="#tabs-3"><h3 class="tabs__title">Тип креплений</h2></a></li>
    </ul>
    <div class="tabs__item" id="tabs-1">
        <div class="tabs__properties checklist">
            {!!$parameter1!!}
        </div>
        <div class="tabs__properties">
            {!!$parameter2!!}
        </div>
    </div>
    <div class="tabs__item" id="tabs-2">
        <div class="tabs__textblock">{!!$parameter3!!}</div>
    </div>
    <div class="tabs__item" id="tabs-3">
        <div class="tabs__textblock">{!!$parameter4!!}</div>
    </div>
    </div>
    @include('pages.include.KIAgallery')
    <div class="text">
        {!!$parameter5!!}
    </div>
    @if ($questions != null)
        <div class="questions">
            <h2 class="questions__title">Популярные вопросы наших клиентов</h2>
            <div class="questions__items">

                <?php $question_num = 1; ?>
                @foreach ($questions as $title => $question)
                    <div class="questions__item <?php if ($question_num == 1) echo 'show'?>">
                        <h3 class="questions__subtitle">{{$title}}</h3>
                        <div class="questions__btn"></div>
                        <div class="questions__text">{!!$question!!}</div>
                    </div>
                    <?php $question_num++; ?>
                @endforeach
                
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    <script src="{{ url('js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/tabs-KIAspectra.js') }}"></script>
    <script src="{{ url('js/kiagallery-slider.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
@endsection