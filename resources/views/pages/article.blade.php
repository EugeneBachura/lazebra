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
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')
    @include('pages.include.main_link')
    @include('pages.include.header')
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="{{url('/')}}" class="breadcrumbs__link">Главная</a>
        <a href="{{url('/blog/')}}" class="breadcrumbs__link">Блог</a>
    </div>
    <div class="title">
        <div class="title__group">
            <h1 class="title__title">{{$this_post['h1']}}</h1>
        </div>
    </div>
    <div class="article">
        <!--<div class="article__content">
            <div class="article__img" style="background: url('img/blog-article/1-1.png') center top no-repeat;"></div>
            <div class="article__caption">Opel Grandland X</div>
            <div class="article__entry">Ещё недавно мы считали Opel Grandland X всего лишь формальным поводом напомнить рынку о существовании легковых моделей марки Opel, а российский рынок дал ему шанс воспользоваться тотальным дефицитом почти всех конкурентов. Увы, это не очень помогло: даже при наличии живых машин дилеры Opel за неполные полгода смогли реализовать чуть больше сотни кроссоверов. Но вот ещё один факт: цены на Grandland X пока остаются на прежнем уровне, а дилеры Opel готовы делать реальные скидки. Может, все-таки стоит присмотреться?</div>
            <div class="article__text">
                <div class="article__p">Конечно, прямо с порога скидку вам не дадут, но немногочисленные пока владельцы Grandland X, описывая процесс покупки в соцсетях, обязательно рассказывают о денежных или других уступках в процессе торговли с менеджерами. Прямо, как в те времена, когда рынок был в относительном порядке, машин хватало на всех, а дилеры были готовы биться за клиента и собственный план продаж!</div>
                <div class="article__p">В прямом сравнении с конкурентами мы уже отмечали, что Grandland X компактнее и не имеет полного привода, а продаётся по цене старших комплектаций более популярных моделей. Но в опросе о том, какой кроссовер читатели были бы готовы купить за 2,5 миллиона рублей, 9% выбрали именно Opel. Почти одна десятая в масштабах сегмента — это много! Поэтому мы решили подробнее разобраться во всех плюсах и минусах немецкого кроссовера на примере топ-версии Cosmo стоимостью 2 519 999 рублей (с учётом двухцветной окраски кузова).</div>
            </div>
            <div class="article__img" style="background: url('img/blog-article/1-2.png') center top no-repeat;"></div>
            <div class="article__caption">Интерьер Opel Grandland X</div>
            <h2 class="article__subtitle">Интерьер</h2>
            <div class="article__text">
                <div class="article__p">Внутри и не подумаешь, что находишься в кроссовере — абсолютно легковая посадка и органы управления, позаимствованные у других моделей Opel. От буйства стиля и странностей эргономики соплатформенных моделей Peugeot и Citroen не осталось ничего. Это стопроцентный Opel с очень строгой, но качественной отделкой. Местами даже слишком аскетичный — например, салону явно не хватает дополнительных USB-зарядок и нормальных подстаканников. Да, есть беспроводная зарядка, но и она запрятана подальше от глаз — в бокс-подлокотник. В общем, придраться по большому счёту вроде бы не к чему, но за душу не берёт.</div>
                <div class="article__p">А ещё смущает компактность — если пересесть в Grandland X, например, из Toyota RAV4, то немецкий кроссовер покажется тесным. Хотя дело, скорее, не в габаритах салона, а в заваленных стойках и более низкой крыше. То есть внутри ты ощущаешь себя не как в кроссовере, а как в легковушке. Что, кстати, вполне может стать преимуществом для тех, кому современные кроссоверы кажутся слишком большими.</div>
            </div>
        </div>-->
        {!!$this_post['text']!!}
        @include('pages.include.blog-prev_article')
    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
@endsection