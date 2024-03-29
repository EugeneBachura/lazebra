@extends('layouts.main')

@section('title')
{{$title}}@endsection

@section('description')
{{$description}}@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-login.css') }}">
    <link rel="stylesheet" href="{{ url('/css/popup-cities.css') }}">
    <link rel="stylesheet" href="{{ url('/css/modile/popup-cities.css') }}">

    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/big-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/preview-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/mini-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/brand-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-subscription.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/big-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/preview-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/mini-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/brand-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-subscription.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-frame-covers.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')
    @include('pages.include.header')
    <div class="big-banner" @if (($big_banner_bg != null)||($big_banner_bg != "")) style="background-image: url(/{{$big_banner_bg}});" @endif >
        <div class="big-banner__container">
            <div class="big-banner__description">
                <h1 class="big-banner__title">{{$h1}}</h1>
                <div class="big-banner__title-text">{{$subtitle}}</div>
            </div>
            <div class="big-banner__content">
                <div class="big-banner__sliders">
                    <?php $show_count = 1 ?>
                    @foreach ($big_banner as $item_banner)
                        <div class="big-banner__slider <?php if ($show_count == 1) echo 'show'?>" id="bigbannerSlider<?php if ($show_count != 1) echo $show_count?>">
                        @foreach ($item_banner['slider'] as $sleder)
                            @if (($sleder != null)||($sleder != ""))
                                <div class="slider__item" style="background: transparent url('/{{$sleder}}') 0% 0% no-repeat padding-box; background-position: top; ">
                                    <div class="slider__content"></div>
                                </div>
                            @endif
                        @endforeach
                        </div>
                        <?php $show_count++ ?>
                    @endforeach
                </div>
                <div class="big-banner__content-text">
                    <?php $show_count = 1 ?>
                    <div class="big-banner__content-points">
                        @foreach ($big_banner as $item_banner)
                            <div class="big-banner__content-point <?php if ($show_count == 1) echo 'show'?>">
                                <h2 class="big-banner__point-heading">{{$item_banner['title']}}</h2>
                                <div class="big-banner__point-text">{{$item_banner['text']}}</div>
                            </div>
                            <?php $show_count++ ?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preview-banner">
        <div class="preview-banner__slider" id="previewSlider">
            @foreach ($sliders as $slider)
                @if (($slider['img'] != null)||($sleder != ""))
                    <div class="slider__item" style="background: transparent url('/{{$slider['img']}}') 0% 0% no-repeat padding-box; background-position: top; ">
                        <div class="slider__content"></div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="preview-banner__description">
            <div class="preview-banner__item">
                <h2 class="preview-banner__title">{{$advantages_title}}</h2>
                @foreach ($advantages as $advantag)
                    @if (($advantag['title'] != null)||($advantag['title'] != ""))
                        <h3 class="preview-banner__headline">{{$advantag['title']}}</h3>
                    @endif 
                    @if (($advantag['text'] != null)||($advantag['text'] != ""))
                        <div class="preview-banner__text">{{$advantag['text']}}</div>
                    @endif 
                @endforeach
            </div>
        </div>
    </div>
    <div class="mini-banner">
        <div class="mini-banner__img" style="background: transparent url('/{{$info_block['img']}}') 0% 0% no-repeat padding-box; background-position: top; "></div>
        <div class="mini-banner__content">
            <h2 class="mini-banner__title">{{$info_block['title']}}</h2>
            {!!$info_block['text']!!}
        </div>
    </div>
    @if (($brands_f != null)||($brands_f != ""))
        <div class="brandlist">
            <h3 class="brandlist__title">Для заказа чехлов, выберите марку своего автомобиля</h3>
            <div class="brandlist__text">Предлагаю здесь в двух предложения описать, по какому принципу разрабатываются каркасные чехлы и что пока предложение ограничено этими моделями, но все в процессе.</div>
            <div class="brandlist__slider" id="brandSlider">
                @foreach ($brands_f as $brand)
                    @if (($brand['url'] != "")||($brand['url'] != null))
                        <a href="{{url('/')}}/{{$frame_link}}/{{$brand['url']}}/" class="brandlist__brand" style="background: url({{url('/')}}/{{$brand['img']}}) 50% 50% no-repeat #F8F8F8;"></a>
                    @endif
                @endforeach
                <a href="#popup-subscription" id="btn-popup-subscription" class="brandlist__brand other">Другая</a>
                {{--@foreach ($brands as $brand_img => $brand_link)
                    <a href="{{$brand_link}}" class="brandlist__brand" style="background: url(/{{$brand_img}}) 50% 50% no-repeat #F8F8F8;"></a>
                @endforeach
                <a href="#popup-subscription" id="btn-popup-subscription" class="brandlist__brand other">Другая</a>--}}
            </div>
            <div class="brandlist__arrows">
                <div class="brandlist__slick-prev"></div>
                <div class="brandlist__slick-next"></div>
            </div>
            <div class="brandlist__arrows-margin"></div>
        </div>
    @endif
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
    @include('pages.include.blog-prev')
    <div class="popup-subscription white-popup mfp-hide" id="popup-subscription">
        <h2 class="popup-subscription__title">Подписка на лекала</h2>
        <form class="popup-subscription__form" action="{{ route('subscription.store') }}" method="POST">
            @csrf
            <input class="popup-subscription__form-name popup-subscription__form-entry" type="text" name="name" placeholder="Ваше имя" required>
            <input class="popup-subscription__form-textemail popup-subscription__form-entry" type="text" name="contact" placeholder="Номер телефона или E-mail" required>
            <input class="popup-subscription__form-model popup-subscription__form-entry" type="text" name="model" placeholder="Модель" required>
            <input class="popup-subscription__form-brand popup-subscription__form-entry" type="text" name="brand" placeholder="Марка" required>
            <input class="popup-subscription__form-age popup-subscription__form-entry" type="number" name="age" placeholder="Год выпуска" required min="1900" max="2099" step="1">
            <input class="popup-subscription__form-checkbox" type="checkbox" name="consent" id="consent" required>
            <label class="popup-subscription__form-checkbox-text" for="consent">Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с Политикой конфиденциальности.</label>
            <input class="popup-subscription__submit-btn" type="submit" name="submit" value="Отправить">
        </form>
        <div class="popup-subscription__close-btn"></div>
    </div>
@endsection


@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/bigbaner-slider.js') }}"></script>
    <script src="{{ url('js/bigbaner-accordion.js') }}"></script>
    <script src="{{ url('js/preview-slider.js') }}"></script>
    <script src="{{ url('js/brandlist-slider.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
    <script src="{{ url('js/popups/subscription.js') }}"></script>
@endsection