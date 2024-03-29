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
    <link rel="stylesheet" href="{{ url('css/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/ask-btn.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-ask.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/questions.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-ask.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-faq.css') }}">
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
            <h1 class="title__title">{{$h1}}</h1> 
            <a href="#popup-ask" class="ask-btn">
                <div class="ask-btn__text">Не нашли ответ?</div>
                <div class="ask-btn__logo"></div>
            </a>
        </div>
    </div>
    @if ($questions != null)
        <div class="questions">
            <h2 class="questions__title">{{$subtitle}}</h2>
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
    <div class="popup-ask white-popup mfp-hide" id="popup-ask">
        <h2 class="popup-ask__title">Не нашли ответ на вопрос? Напишите нам.</h2>
        <form class="popup-ask__form" action="{{ route('ask.store') }}"{{--action="{{url('/php/send.php?r='.url()->current() )}}"--}} method="POST">
            @csrf
            <input class="popup-ask__form-name popup-ask__form-entry" type="text" name="name" placeholder="Ваше имя" required>
            <input class="popup-ask__form-email popup-ask__form-entry" type="email" name="email" placeholder="E-mail" required>
            <textarea class="popup-ask__form-ask popup-ask__form-entry" type="text" name="text" placeholder="Ваш вопрос" required ></textarea>
            <input class="popup-ask__form-checkbox" type="checkbox" name="consent" id="consent" required>
            <label class="popup-ask__form-checkbox-text" for="consent">Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с <a class="privacylink" href="#">Политикой конфиденциальности</a>.</label>
            <input class="popup-ask__submit-btn" type="submit" name="submit" value="Сохранить">
        </form>
        <div class="popup-ask__close-btn"></div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/questions.js') }}"></script>
    <script src="{{ url('js/ask-btn.js') }}"></script>
    <script src="{{ url('js/popups/ask.js') }}"></script>
@endsection