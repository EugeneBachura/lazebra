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
    <link rel="stylesheet" href="{{ url('css/advantages.css') }}">
    <link rel="stylesheet" href="{{ url('css/big-header.css') }}">
    <link rel="stylesheet" href="{{ url('css/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/cars-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/kiagallery.css') }}">
    <link rel="stylesheet" href="{{ url('css/long-c-btn.css') }}">
    <link rel="stylesheet" href="{{ url('css/text.css') }}">
    <link rel="stylesheet" href="{{ url('css/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/advantages.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/big-header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/cars-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/kiagallery.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/long-c-btn.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/text.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">
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
        <a href="{{$covers_url}}/" class="breadcrumbs__link"> 
            @if ($covers == "model")
                Модельные авточехлы Лазебра
            @endif
            @if ($covers == "frame")
                Каркасные авточехлы Лазебра
            @endif
        </a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">{{$h1}}</h1>
            <div class="title__subtitle">{{$subtitle}}</div>
        </div>
        <div class="title__price"><small>от</small> <?php echo number_format($price, 0, '.', ' '); ?> ₽</div>
    </div>
    <div class="cars-list">
        @foreach ($brand_models as $brand_model)

        @if (($brand_model->url != null)&&($covers == 'model'))
            <a href="{{ $base_url }}{{ $brand_model->url }}/" class="cars-list__item">
                <div class="cars-list__bg" style="background-image: url('/{{$brand_model->img}}');"></div>
                <h3 class="cars-list__name">{{$name_brand}} {{$brand_model->name}}</h3>
            </a>
        @endif

        @if (($brand_model->url != null)&&($covers == 'frame'))
            <a href="{{ $base_url }}{{ $brand_model->url }}" class="cars-list__item">
                <div class="cars-list__bg" style="background-image: url('/{{$brand_model->img}}');"></div>
                <h3 class="cars-list__name">{{$name_brand}} {{$brand_model->name}}</h3>
            </a>
        @endif
        
        @endforeach
    </div>
    @include('pages.include.KIAgallery')
    <div class="long-c-btn">
        <div class="long-c-btn__icon"></div>
        <div class="long-c-btn__text">Создайте свой дизайн чехлов {{$name_brand}} в конструкторе</div>
    </div>
    <div class="text">
        {!! $content !!}
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
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/kiagallery-slider.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
@endsection