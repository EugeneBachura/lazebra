@extends('layouts.main')

@section('title')
{{$title}}@endsection

@section('description')
{{$description}}@endsection

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
    <link rel="stylesheet" href="{{ url('css/preview-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/product.css') }}">
    <link rel="stylesheet" href="{{ url('css/brand-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-subscription.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/advantages.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/big-header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/preview-banner.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/product.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/brand-list.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/blog-prev.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-subscription.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-model-covers.css') }}">
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
        <a href="{{url('/')}}" class="breadcrumbs__link">Главная</a>
        <a href="{{url()->current()}}/" class="breadcrumbs__link">{{$h1}}</a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">{{$h1}}</h1>
            <div class="title__subtitle">{{$subtitle}}</div>
        </div>
        <div class="title__price"><small>от</small> <?php echo number_format($price, 0, '.', ' '); ?> ₽</div>
    </div>
    <div class="preview-banner">
        <div class="preview-banner__slider" id="previewSlider">
            @foreach ($sliders as $slider)
                @if (($slider['img'] != null)||($slider['img'] != ""))
                    <div class="slider__item" style="background: transparent url('/{{$slider['img']}}') 0% 0% no-repeat padding-box; background-position: top; ">
                        <div class="slider__content"></div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="preview-banner__description">
            @foreach ($advantages as $advantag)
                <div class="preview-banner__item">
                    <h3 class="preview-banner__headline">{{ $advantag['title'] }}</h3>
                    <div class="preview-banner__text">{{ $advantag['text'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
    @include('pages.include.product')
    {{--@include('pages.include.brandlist')--}}
    @if (($brands != null)||($brands != ""))
        <div class="brandlist">
            <h3 class="brandlist__title">Для заказа чехлов, выберите марку своего автомобиля</h3>
            <div class="brandlist__slider" id="brandSlider">
                @foreach ($brands as $brand)
                    @if (($brand['url'] != "")||($brand['url'] != null))
                        <a href="{{url('/')}}/{{$model_link}}/{{$brand['url']}}/" class="brandlist__brand" style="background: url({{url('/')}}/{{$brand['img']}}) 50% 50% no-repeat #F8F8F8;"></a>
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
    <script src="{{ url('js/preview-slider.js') }}"></script>
    <script src="{{ url('js/product-slider.js') }}"></script>
    <script src="{{ url('js/brandlist-slider.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
    <script src="{{ url('js/popups/subscription.js') }}"></script>
@endsection