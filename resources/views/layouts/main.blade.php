<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="description" content="@yield('description')">
        <title>@yield('title')</title>

        @yield('css')

        <link rel="stylesheet" href="{{ url('/css/fonts.css') }}">
    </head>
    <body id="page">
    
        @yield('content')

        <footer class="footer">
            <div class="footer__left">
                <div class="footer__menu">
                    @foreach ($footer_menu as $count_col_menu => $col_menu)
                        <div class="footer__column footer__column{{$count_col_menu+1}}">
                            <h3 class="footer__title">{{$col_menu['name']}}</h3>
                            <div class="footer__nav">
                            @foreach ($col_menu['items'] as $item_menu)
                                @if (($item_menu['link'] != null)||($item_menu['link'] != ""))
                                    <a href="{{url($item_menu['link'])}}/">{{$item_menu['title']}}</a>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="footer__right">
                <div class="footer__tel">
                    <a href="tel:+88007005824">8 800 700 58 24</a>
                    <a href="tel:+78412224604">+7 (8412) 22 46 04</a>
                </div>
                <div class="footer__card">
                    <a @yield('main_link') class="footer__logo"></a>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__links">
                    <div class="footer__s-network network-btn">
                        <a href="#" class="network-btn vk"></a>
                        <a href="#" class="network-btn inst"></a>
                    </div>
                    <div class="footer__messengers messengers">
                        <a href="#" class="messengers__btn viber"></a>
                        <a href="#" class="messengers__btn telegram"></a>
                        <a href="#" class="messengers__btn whatsapp"></a>
                    </div>
                </div>
                <div class="footer__copyrigt">
                    © 2012 - 2021 lazebra.ru Модельные и каркасные авточехлы. Доставка по России.
                </div>
            </div>
        </footer>

    <script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/jquery.cookie.js') }}"></script>
    @yield('scripts')
</body>
</html>
