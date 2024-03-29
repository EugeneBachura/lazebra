@extends('layouts.main')

@section('title')
{{$title}}@endsection

@section('description')
{{$description}}@endsection

@section('css')
        <link rel="stylesheet" href="{{ url('/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('/css/popup-login.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/popup-login.css') }}">
        <link rel="stylesheet" href="{{ url('/css/popup-cities.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/popup-cities.css') }}">

        <link rel="stylesheet" href="{{ url('/css/main.css') }}">
        <link rel="stylesheet" href="{{ url('/css/header.css') }}">
        <link rel="stylesheet" href="{{ url('/css/slider.css') }}">
        <link rel="stylesheet" href="{{ url('/css/advantages.css') }}">
        <link rel="stylesheet" href="{{ url('/css/differences.css') }}">
        <link rel="stylesheet" href="{{ url('/css/stages.css') }}">
        <link rel="stylesheet" href="{{ url('/css/product.css') }}">
        <link rel="stylesheet" href="{{ url('/css/footer.css') }}">
        <link rel="stylesheet" href="{{ url('/css/btn-constructor.css') }}">

        <link rel="stylesheet" href="{{ url('/css/modile/main.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/header.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/slider.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/advantages.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/differences.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/stages.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/product.css') }}">
        <link rel="stylesheet" href="{{ url('/css/modile/footer.css') }}">
@endsection

@section('content')
@include('pages.include.header')
    <div class="slider" id="main-slider">
        @foreach ($sliders as $slider)
            @if (($slider['img'] != null)||($slider['img'] != ""))
                <div class="slider__item" style="background: transparent url('{{$slider['img']}}') 0% 0% no-repeat padding-box; background-position: top; ">
                    <a href="{{$slider['link']}}"><div class="slider__content"></div></a>
                </div>
            @endif
        @endforeach
    </div>
    @include('pages.include.advantages')
    <div class="differences">
        <div class="differences__description">
            <h1 class="differences__desc-title">{{$h1}}</h1>
            
            <div class="differences__desc-btn">Продробнее об отличиях</div>
        </div>
        <div class="differences__content">
            <div class="differences__content-column">
                <h3 class="differences__content-title">Модельные авточехлы</h3>
                <div class="differences__content-subtitle">{{$frame_covers_text}}</div>
                <div class="differences__content-items" id="firstDifferencesContent">
                    @foreach ($frame_covers as $frame_cover)
                        <div class="info-block">
                            <div class="info-block__icon"
                                style="background: transparent url('{{$frame_cover['logo']}}') 0% 0% no-repeat padding-box;">
                            </div>
                            <h4 class="info-block__title">{{$frame_cover['title']}}</h4>
                            <div class="info-block__text">{{$frame_cover['text']}}</div>
                        </div>
                    @endforeach
                </div>
                <div class="differences__content-offtop">
                    {{$frame_covers_footnote}}
                </div>
            </div>
            <div class="differences__line"></div>
            <div class="differences__content-column">
                <h3 class="differences__content-title">Каркасные авточехлы</h3>
                <div class="differences__content-subtitle">{{$model_covers_text}}</div>
                <div class="differences__content-items" id="secondDifferencesContent">
                    @foreach ($model_covers as $model_cover)
                        <div class="info-block">
                            <div class="info-block__icon"
                                style="background: transparent url('{{$model_cover['logo']}}') 0% 0% no-repeat padding-box;">
                            </div>
                            <h4 class="info-block__title">{{$model_cover['title']}}</h4>
                            <div class="info-block__text">{{$model_cover['text']}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="differences__mobile-bottom">
            <h3 class="differences__mobile-text">В чем отличия модельных от каркасных чехлов</h3>
            <a href="#" class="differences__mobile-btn">Продробнее об отличиях</a>
        </div>
    </div>
    <div class="stages">
        <div class="stages__content">
            <div class="stages__preitem">
                <div class="stages__1line"></div>
                <div class="stages__icon"></div>
                <h2 class="stages__title">Как сделать заказ</h2>
            </div>
            <?php $i = 1; ?>
            @foreach ($stages as $stag)
                <div class="stages__item @if ($i == 1) stages__item_1 @endif">
                    <div class="stages__{{$i+1}}line"></div>
                    <div class="stages__number">{{$i}}.</div>
                    <h3 class="stages__item-title">{{$stag['title']}}</h3>
                    <div class="stages__text">{{$stag['text']}}</div>
                        @switch($i)
                            @case(1)
                                <div class="stages__btn">Каталог</div>
                                @break
                            @case(2)
                                <div class="stages__btn">
                                    <div class="stages__icon-btn"></div>Конструктор
                                </div>
                                @break
                            @default
                                @break
                        @endswitch
                </div>
                <?php $i++; ?>
            @endforeach
        </div>
    </div>
    @include('pages.include.product')
    <a href="{{url('/')}}/constructor/" class="btn-constructor"></a>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/slider.js') }}"></script>
    <script src="{{ url('js/product-slider.js') }}"></script>
@endsection