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
    <link rel="stylesheet" href="{{ url('css/contact-blocks.css') }}">
    <link rel="stylesheet" href="{{ url('css/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/popup-map.css') }}">

    <link rel="stylesheet" href="{{ url('css/modile/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/breadcrumbs.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/title.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/contact-blocks.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/modile/popup-map.css') }}">

    <link rel="stylesheet" href="{{ url('css/main-contacts.css') }}">
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
        </div>
    </div>
    <div class="contact-blocks">
        <div class="contact-blocks__item">
            <div class="contact-blocks__content">
                <h2 class="contact-blocks__title">{{$titleBlock1}}</h2>
                <div class="contact-blocks__content-item">
                    <div class="contact-blocks__content-item-block">
                        {!! $contact1['main'] !!}
                    </div>
                </div>
                <div class="contact-blocks__content-item">
                    <a href="tel:+<?php echo preg_replace("/[^0-9]+[+]/", '', $contact1['tel']); ?>" class="contact-blocks__phone">{{$contact1['tel']}}</a>
                    <a href="mailto:{{$contact1['email']}}" class="contact-blocks__email">{{$contact1['email']}}</a>
                </div>
            </div>
            <a href="#popup-map1" class="contact-blocks__btn">Cхема проезда</a>
        </div>
        <div class="contact-blocks__item">
            <div class="contact-blocks__content">
                <h2 class="contact-blocks__title">{{$titleBlock2}}</h2>
                <div class="contact-blocks__content-item">
                    <div class="contact-blocks__content-item-block">
                        {!! $contact2['main'] !!}
                    </div>
                </div>
                <div class="contact-blocks__content-item">
                    <a href="tel:<?php echo preg_replace("/[^0-9]+[+]/", '', $contact2['tel']); ?>" class="contact-blocks__phone">{{$contact2['tel']}}</a>
                    <a href="mailto:{{$contact2['email']}}" class="contact-blocks__email">{{$contact2['email']}}</a>
                </div>
            </div>
            <a href="#popup-map2" class="contact-blocks__btn">Cхема проезда</a>
        </div>
        <div class="contact-blocks__item">
            <div class="contact-blocks__content">
                <h2 class="contact-blocks__title">{{$titleBlock3}}</h2>
                <div class="contact-blocks__content-item">
                    <div class="contact-blocks__content-item-block">
                        {!! $contact3['main'] !!}
                    </div>
                </div>
                <div class="contact-blocks__content-item">
                    <a href="tel:<?php echo preg_replace("/[^0-9]+[+]/", '', $contact3['tel']); ?>" class="contact-blocks__phone">{{$contact3['tel']}}</a>
                    <a href="mailto:{{$contact3['email']}}" class="contact-blocks__email">{{$contact3['email']}}</a>
                </div>
            </div>
            <a href="#popup-map3" class="contact-blocks__btn">Cхема проезда</a>
            <div class="contact-blocks__content">
                <div class="contact-blocks__content-item">
                    <div class="contact-blocks__content-item-block">
                        {!! $contact4['main'] !!}
                    </div>
                </div>
                <div class="contact-blocks__content-item">
                    <a href="tel:<?php echo preg_replace("/[^0-9]+[+]/", '', $contact4['tel']); ?>" class="contact-blocks__phone">{{$contact4['tel']}}</a>
                    <a href="mailto:{{$contact4['email']}}" class="contact-blocks__email">{{$contact4['email']}}</a>
                </div>
            </div>
            <a href="#popup-map4" class="contact-blocks__btn">Cхема проезда</a>
        </div>
        <div class="contact-blocks__invite">
            <h2 class="contact-blocks__invite-title">Приглашаем к сотрудничеству</h2>
            <div class="contact-blocks__invite-subtitle">Узнайте о том, как стать партнером Лазебра</div>
            <a href="#" class="contact-blocks__invite-btn">Подробнее</a>
        </div>
    </div>

    <div class="popup-map white-popup mfp-hide" id="popup-map1">
        <iframe class="popup-map__frame" src="{{$contact1['map']}}" width="1280" height="700" frameborder="0"></iframe>
        <div class="popup-map__close-btn"></div>
    </div>
    <div class="popup-map white-popup mfp-hide" id="popup-map2">
        <iframe class="popup-map__frame" src="{{$contact2['map']}}" width="1280" height="700" frameborder="0"></iframe>
        <div class="popup-map__close-btn"></div>
    </div>
    <div class="popup-map white-popup mfp-hide" id="popup-map3">
        <iframe class="popup-map__frame" src="{{$contact3['map']}}" width="1280" height="700" frameborder="0"></iframe>
        <div class="popup-map__close-btn"></div>
    </div>
    <div class="popup-map white-popup mfp-hide" id="popup-map4">
        <iframe class="popup-map__frame" src="{{$contact4['map']}}" width="1280" height="700" frameborder="0"></iframe>
        <div class="popup-map__close-btn"></div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script src="{{ url('js/popups/maps.js') }}"></script>
@endsection

