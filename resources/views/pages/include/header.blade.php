<header class="header">
    <div class="header__top">
        <div class="header__logo-container">
            <a @yield('main_link') class="header__logo"></a>
        </div>
        <a href="#popup-cities" class="header__location">
            <div class="header__location-icon"></div>
            <div class="location-name">Пенза</div>
        </a>
        <a href="tel:+78412224604" class="header__tel">+7 (8412) 22 46 04</a>
        <div class="header__messengers messengers">
            <a href="#" class="messengers__btn viber"></a>
            <a href="#" class="messengers__btn telegram"></a>
            <a href="#" class="messengers__btn whatsapp"></a>
        </div>
        <div class="header__search">
            <div class="header__search-btn"></div>
        </div>
        <div class="header__search-window start-hide">
            <form class="header__search-form">
                <input class="header__search-input" type="text" placeholder="Поиск" required>
                <input class="header__search-submit" type="submit" value="Найти">
            </form>
        </div>
        <a href="#popup-login" class="header__login-btn" type="button">Войти</a>
        <div class="header__burger"><span></span></div>
    </div>
    <div class="header__bottom">
        <nav class="header__nav">
            <a @yield('main_link') class="header__mini-logo"></a>

            <?php $main_munu_count = 1 ?>
            @foreach ($main_menu as $menu_item)
                <a href="{{url($menu_item['link'])}}/" class="header__nav-item submenu_link{{$main_munu_count}}">{{$menu_item['name']}}</a>
                <?php $main_munu_count++ ?>
            @endforeach
            
            <div class="header__separate-nav-item"></div>
            <a href="{{url('/')}}/constructor/" class="header__constructor">
                <div class="header__construtor-caption">Конструктор чехлов</div>
                <div class="header__construtor-logo"></div>
            </a>
        </nav>
        <div class="header__mobile-bottom">
            <a href="tel:+78412224604" class="header__tel mobile">+7 (8412) 22 46 04</a>
            <div class="header__messengers messengers mobile">
                <a href="#" class="messengers__btn viber"></a>
                <a href="#" class="messengers__btn telegram"></a>
                <a href="#" class="messengers__btn whatsapp"></a>
            </div>
        </div>
    </div>
    <div class="header__submenu submenu1 start-hide">
        <div class="header__mobile-submenu-btn"></div>
        <div class="header__mobile-submenu-title">Выберите марку</div>
        @foreach ($brands as $brand)
            @if ($brand['url'] != null)
                <a href="{{url('/')}}/{{$model_link}}/{{$brand['url']}}/" class="header__brand" style="background: url({{url('/')}}/{{$brand['img']}}) 50% 50% no-repeat #F8F8F8;"></a>
            @endif
        @endforeach
        <!--<a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand toyota"></a>
        <a href="#" class="header__brand mazda"></a>
        <a href="#" class="header__brand lexus"></a>
        <a href="#" class="header__brand lada"></a>
        <a href="#" class="header__brand chery"></a>
        <a href="#" class="header__brand chevrolet"></a>
        <a href="#" class="header__brand citroen"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand toyota"></a>
        <a href="#" class="header__brand mazda"></a>
        <a href="#" class="header__brand lexus"></a>
        <a href="#" class="header__brand lada"></a>
        <a href="#" class="header__brand chery"></a>
        <a href="#" class="header__brand chevrolet"></a>
        <a href="#" class="header__brand citroen"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>-->
    </div>
    <div class="header__submenu submenu2 start-hide">
        <div class="header__mobile-submenu-btn"><span></span></div>
        <div class="header__mobile-submenu-title">Выберите марку</div>
        @foreach ($brands_f as $brand)
            @if ($brand['url'] != null)
                <a href="{{url('/')}}/{{$frame_link}}/{{$brand['url']}}/" class="header__brand" style="background: url({{url('/')}}/{{$brand['img']}}) 50% 50% no-repeat #F8F8F8;"></a>
            @endif
        @endforeach
        <!--<a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand toyota"></a>
        <a href="#" class="header__brand mazda"></a>
        <a href="#" class="header__brand lexus"></a>
        <a href="#" class="header__brand lada"></a>
        <a href="#" class="header__brand chery"></a>
        <a href="#" class="header__brand chevrolet"></a>
        <a href="#" class="header__brand citroen"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand toyota"></a>
        <a href="#" class="header__brand mazda"></a>
        <a href="#" class="header__brand lexus"></a>
        <a href="#" class="header__brand lada"></a>
        <a href="#" class="header__brand chery"></a>
        <a href="#" class="header__brand chevrolet"></a>
        <a href="#" class="header__brand citroen"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>
        <a href="#" class="header__brand peugeot"></a>
        <a href="#" class="header__brand bmw"></a>
        <a href="#" class="header__brand ford"></a>
        <a href="#" class="header__brand honda"></a>
        <a href="#" class="header__brand renault"></a>-->
    </div>
</header>

<div class="popup-login white-popup mfp-hide" id="popup-login">
    <h2 class="popup-login__title">Вход на сайт</h2>
    <form class="popup-login__form">
        <input class="popup-login__form-tel" type="tel" name="tel" placeholder="+7" value="+7" pattern="[+]{1}[0-9]{11,14}" onkeyup="this.value = this.value.replace(/[^+\d]/g,'');" required>
        <input class="popup-login__form-checkbox" type="checkbox" name="consent" id="consent" required>
        <label class="popup-login__form-checkbox-text" for="consent">Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с <a class="privacylink" href="#">Политикой конфиденциальности</a>.</label>
        <input class="popup-login__submit-btn" type="submit" name="submit" value="Выслать код">
    </form>
    <div class="popup-login__close-btn"></div>
</div>

<div class="popup-cities white-popup mfp-hide" id="popup-cities">
    <h2 class="popup-cities__title">Выберите свой город</h2>
    <div class="popup-cities__list">
        <a href="#" class="popup-cities__list-item">Москва</a>
        <a href="#" class="popup-cities__list-item">Санкт-Петербург</a>
        <a href="#" class="popup-cities__list-item">Самара</a>
        <a href="#" class="popup-cities__list-item">Ульяновск</a>
        <a href="#" class="popup-cities__list-item">Пенза</a>
        <a href="#" class="popup-cities__list-item">Челябинск</a>
        <a href="#" class="popup-cities__list-item">Ростов-на-Дону</a>
        <a href="#" class="popup-cities__list-item">Краснодар</a>
        <a href="#" class="popup-cities__list-item">Екатеринбург</a>
        <a href="#" class="popup-cities__list-item">Владивосток</a>
    </div>
    <form class="popup-cities__search-form">
        <input class="popup-cities__search-input" type="text" placeholder="Поиск" required>
        <input class="popup-cities__search-submit" type="submit" value="">
    </form>
    <div class="popup-cities__search-window hide">
        <ul>
        </ul>
    </div>
    <div class="popup-cities__close-btn"></div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">