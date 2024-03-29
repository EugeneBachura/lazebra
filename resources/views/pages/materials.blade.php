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
    <link rel="stylesheet" href="{{ url('css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('css/add.css') }}">
@endsection

@section('main_link')
href="{{url('/')}}"@endsection

@section('content')    
    @include('pages.include.header') 
    <div class="breadcrumbs">
        <div class="breadcrumbs__arrow"></div>
        <a href="{{url('/')}}" class="breadcrumbs__link">Главная</a>
        <a href="{{url()->current()}}/" class="breadcrumbs__link">{{$h1}}</a>
    </div>
    <!-- <div class="title">
        <div class="title__group">
            <h1 class="title__title">Фабрика автомобильных чехлов Лазебра</h1>
        </div>
    </div> -->

    <article>
        <div class="article_content">
            <h1>{{$h1}}</h1>
            @foreach ($materials as $material)
                <h2>{{$material['title']}}</h2>
                {!! $material['text'] !!}
                <div class="page_materials__block">
                    <div class="page_materials__item">
                        <div class="page_materials__left">
                            Особенности:
                        </div>
                        <div class="page_materials__right">
                            <ul>
                                @foreach ($material['spec'] as $spec)
                                    @if (($spec != null)||($spec != ""))
                                        <li>{{$spec}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="page_materials__item">
                        <div class="page_materials__left">
                            Толщина:
                        </div>
                        <div class="page_materials__right">
                            <p>{{$material['thick']}}</p>
                        </div>
                    </div>
                    <div class="page_materials__item">
                        <div class="page_materials__left">
                            Реальный срок службы:
                        </div>
                        <div class="page_materials__right">
                            <p>{{$material['lifetime']}}</p>
                        </div>
                    </div>
                    @foreach ($material['palette'] as $palette)
                        @if (($palette['title'] != null)||($palette['title'] != ""))
                            <div class="page_materials__item">
                                <div class="page_materials__left">
                                    <span>Цветовая гамма</span><p>{{$palette['title']}}</p>
                                </div>
                                <div class="page_materials__right">
                                    <div class="page_materials__examples">
                                        @foreach ($palette['imgs'] as $img)
                                            @if (($img != null)||($img != ""))
                                                <img src="/{{$img}}">
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="page_materials__slider">
                    @foreach ($material['slider'] as $slide)
                        @if (($slide['img'] != null)||($slide['img'] != ""))
                            <div><img src="/{{$slide['img']}}"></div>
                        @endif
                    @endforeach
                </div>

            @endforeach

            
            <h2>{{$many_pic1['title']}}</h2>
            <p>Декоративная цветная строчка швов по контуру сидений. Придает салону автомобиля индивидуальность и стильность за счет контрастной цветовой гаммы. <br>Входит в базовую стоимость комплекта авточехлов.</p>
            <div class="page_materials__examples">
                @foreach ($many_pic1['imgs'] as $img)
                    @if (($img != null)||($img != ""))
                        <img src="/{{$img}}">
                    @endif
                @endforeach
            </div>
            <p>&nbsp</p>
            <p>&nbsp</p>
            <h2>{{$many_pic2['title']}}</h2>
            <p>Логотип автомобиля или любой рисунок по желанию заказчика, вышитый на спинке или подголовнике. Яркий штрих из мира люксовых машин, делающий салон автомобиля запоминающимся и по настоящему уникальным.</p>
            <div class="page_materials__examples">
                @foreach ($many_pic2['imgs'] as $img)
                    @if (($img != null)||($img != ""))
                        <img src="/{{$img}}">
                    @endif
                @endforeach
            </div>
            <p></p>

        </div>

        <div class="article_nav">
            <div class="article_nav__block">
                <p>Содержание:</p>
            </div>
        </div>
    </article>
@endsection

@section('scripts')
    <script src="{{ url('js/slick.min.js') }}"></script>
    <script src="{{ url('js/popups/login.js') }}"></script>
    <script src="{{ url('js/popups/cities.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/header.js') }}"></script>
    <script type="text/javascript">

        $('article h2').each(function(){
            var thisText = $(this).text();
            var anchorText2 = thisText.replace(/ /g, "-");
            var anchorText3 = anchorText2.replace(".", "");
            var anchorText4 = anchorText3.replace("?", "");
            var anchorText5 = anchorText4.replace("!", "");
            var anchorText = anchorText5.replace(".", "");
            var anchorLink = '<div class="article_nav__item"><a id="' + anchorText + '"></a></div>';
            var anchorText = '<div class="article_nav__item"><a href="#' + anchorText + '">' + thisText + '</a></div>'; 
            $(this).before(anchorLink);
            $(anchorText).appendTo('.article_nav__block');
          });

          $('.article_nav__block a').on( 'click', function(){ 
              var el = $(this);
              var dest = el.attr('href');
              if(dest !== undefined && dest !== '') { 
                  $('html').animate({ 
                      scrollTop: $(dest).offset().top - 90
                  }, 500 
                  );
              }
              return false;
          });

          $('.page_materials__slider').slick({
                autoplay: true,
                autoplaySpeed: 8000,
                speed: 1500,
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
    </script>
@endsection