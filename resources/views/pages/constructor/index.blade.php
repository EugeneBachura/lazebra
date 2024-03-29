  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/preloader.css') }}">
  <script src="{{ url('constructor-app/js/preloader.js') }}"></script>
  
  <link rel="shortcut icon" href="{{ url('constructor-app/TemplateData/favicon.ico') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/TemplateData/style.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/constructor-popup.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/constructor.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/constructor-mobile.css') }}">
  <link rel="stylesheet" href="{{ url('constructor-app/css/tooltip.css') }}">


  <link rel="stylesheet" href="{{ url('constructor-app/css/fonts.css') }}">


  <script src="{{ url('constructor-app/TemplateData/UnityProgress.js') }}"></script>
  <script src="{{ url('constructor-app/Build/UnityLoader.js') }}"></script>
  <script src="{{ url('constructor-app/constructor.js') }}"></script>

  <div class="preloader"></div>


  <!--Конструктор-->
  <div class="constructor" onselectstart="return false">
      <div class="constructor__model">
        <div id="unityContainer" style="width: 100%; height: 100%"></div>
      </div>
      <div class="constructor__tabs" id="constructorTabs">
        <ul class="constructor__tabs-headline">
          <li><a href="#constructor__tabs-1">
              <h3 class="constructor__tabs-title">Дизайн</h2>
            </a></li>
          <li><a href="#constructor__tabs-2">
              <h3 class="constructor__tabs-title">Материал</h2>
            </a></li>
          <li><a href="#constructor__tabs-3">
              <h3 class="constructor__tabs-title">Строчка</h2>
            </a></li>
          <li><a href="#constructor__tabs-4">
              <h3 class="constructor__tabs-title">Стёжка</h2>
            </a></li>
        </ul>
        <div class="constructor__tabs-item" id="constructor__tabs-1">
          <div class="constructor__tabs-content constructor__tabs-content_around">
            <div class="constructor__design click" data-value="Classic">
              <div class="constructor__design-img" style="background-image: url('{{url('constructor-app/img/seat.png')}}');"></div>
              <div class="constructor__design-name">Classic</div>
            </div>
            <div class="constructor__design" data-value="Dynamic">
              <div class="constructor__design-img" style="background-image: url('{{url('constructor-app/img/seat.png')}}');"></div>
              <div class="constructor__design-name">Dynamic</div>
            </div>
          </div>
        </div>

        <div class="constructor__tabs-item" id="constructor__tabs-2">

          <div class="constructor__selection-slider" id="materialBaseSlider">
            <div id="materialBaseBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="headrestFrontSlider">
            <div id="headrestFrontBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
              <div class="constructor__selection-item" data-value="value46" data-name="Жаккард" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/46.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value47" data-name="Жаккард" data-color="Бежево-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/47.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Бежево-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value48" data-name="Жаккард" data-color="Серо-синие квадраты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/48.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-синие квадраты</div>
              </div>
              <div class="constructor__selection-item" data-value="value49" data-name="Жаккард" data-color="Темно-синий с точкой">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/49.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Темно-синий с точкой</div>
              </div>
              <div class="constructor__selection-item" data-value="value50" data-name="Жаккард" data-color="Черно-серый, малые квадрат">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/50.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черно-серый, малые квадрат</div>
              </div>
              <div class="constructor__selection-item" data-value="value51" data-name="Жаккард" data-color="Серо-черные соты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/51.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черные соты</div>
              </div>
              <div class="constructor__selection-item" data-value="value52" data-name="Жаккард" data-color="Серо-черный ромб">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/52.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черный ромб</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="headrestBackSlider">
            <div id="headrestBackBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="headrestSidesSlider">
            <div id="headrestSidesBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="backTopSlider">
            <div id="backTopBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="backBaseSlider">
            <div id="backBaseBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
              <div class="constructor__selection-item" data-value="value46" data-name="Жаккард" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/46.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value47" data-name="Жаккард" data-color="Бежево-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/47.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Бежево-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value48" data-name="Жаккард" data-color="Серо-синие квадраты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/48.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-синие квадраты</div>
              </div>
              <div class="constructor__selection-item" data-value="value49" data-name="Жаккард" data-color="Темно-синий с точкой">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/49.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Темно-синий с точкой</div>
              </div>
              <div class="constructor__selection-item" data-value="value50" data-name="Жаккард" data-color="Черно-серый, малые квадрат">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/50.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черно-серый, малые квадрат</div>
              </div>
              <div class="constructor__selection-item" data-value="value51" data-name="Жаккард" data-color="Серо-черные соты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/51.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черные соты</div>
              </div>
              <div class="constructor__selection-item" data-value="value52" data-name="Жаккард" data-color="Серо-черный ромб">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/52.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черный ромб</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="sidewallSlider">
            <div id="sidewallBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-slider" id="seatBaseSlider">
            <div id="seatBaseBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="value1" data-name="Аригон гладкая" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/1.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Аригон гладкая" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/2.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Аригон гладкая" data-color="Тёмно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/3.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Тёмно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Аригон гладкая" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/4.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Аригон гладкая" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/5.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Аригон гладкая" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/6.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Аригон гладкая" data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/7.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Аригон гладкая" data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/8.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Аригон гладкая" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/9.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Аригон гладкая" data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/10.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Аригон гладкая" data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/11.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон гладкая<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Аригон перфор." data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/16.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Аригон перфор." data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/17.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Аригон перфор." data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/18.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Аригон перфор." data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/19.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Аригон перфор." data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/20.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value21" data-name="Аригон перфор." data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/21.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value22" data-name="Аригон перфор." data-color="Кремовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/22.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Кремовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value23" data-name="Аригон перфор." data-color="Белый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/23.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Белый</div>
              </div>
              <div class="constructor__selection-item" data-value="value24" data-name="Аригон перфор." data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/24.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value25" data-name="Аригон перфор." data-color="Оранжевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/25.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Оранжевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value26" data-name="Аригон перфор." data-color="Синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/26.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value27" data-name="Аригон перфор." data-color="Фиолетовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/27.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Фиолетовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value28" data-name="Аригон перфор." data-color="Бирюзовый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/28.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Бирюзовый</div>
              </div>
              <div class="constructor__selection-item" data-value="value29" data-name="Аригон перфор." data-color="Жёлтый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/29.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Жёлтый</div>
              </div>
              <div class="constructor__selection-item" data-value="value30" data-name="Аригон перфор." data-color="Зелёный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/30.png')}}');"></div>
                <div class="constructor__selection-name-item">Аригон перфор.<br>Зелёный</div>
              </div>
              <div class="constructor__selection-item" data-value="value31" data-name="Эко замша" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/31.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Чёрный</div>
              </div>
              <div class="constructor__selection-item" data-value="value32" data-name="Эко замша" data-color="Темно-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/32.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value33" data-name="Эко замша" data-color="Светло-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/33.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value34" data-name="Эко замша" data-color="Темно-бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/34.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value35" data-name="Эко замша" data-color="Темно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/35.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Темно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value36" data-name="Эко замша" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/36.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value37" data-name="Эко замша" data-color="Песочно-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/37.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Песочно-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value38" data-name="Эко замша" data-color="Светло-коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/38.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value39" data-name="Эко замша" data-color="Светло-синий">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/39.png')}}');"></div>
                <div class="constructor__selection-name-item">Эко замша<br>Светло-синий</div>
              </div>
              <div class="constructor__selection-item" data-value="value40" data-name="Велюр" data-color="Черный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/40.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value41" data-name="Велюр" data-color="Серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/41.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value42" data-name="Велюр" data-color="Бежевый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/42.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Бежевый</div>
              </div>
              <div class="constructor__selection-item" data-value="value43" data-name="Велюр" data-color="Коричневый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/43.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Коричневый</div>
              </div>
              <div class="constructor__selection-item" data-value="value44" data-name="Велюр" data-color="Красный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/44.png')}}');"></div>
                <div class="constructor__selection-name-item">Велюр<br>Красный</div>
              </div>
              <div class="constructor__selection-item" data-value="value45" data-name="Швайцер" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/45.png')}}');"></div>
                <div class="constructor__selection-name-item">Швайцер</div>
              </div>
              <div class="constructor__selection-item" data-value="value46" data-name="Жаккард" data-color="Чёрный">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/46.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черный</div>
              </div>
              <div class="constructor__selection-item" data-value="value47" data-name="Жаккард" data-color="Бежево-серый">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/47.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Бежево-серый</div>
              </div>
              <div class="constructor__selection-item" data-value="value48" data-name="Жаккард" data-color="Серо-синие квадраты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/48.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-синие квадраты</div>
              </div>
              <div class="constructor__selection-item" data-value="value49" data-name="Жаккард" data-color="Темно-синий с точкой">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/49.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Темно-синий с точкой</div>
              </div>
              <div class="constructor__selection-item" data-value="value50" data-name="Жаккард" data-color="Черно-серый, малые квадрат">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/50.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Черно-серый, малые квадрат</div>
              </div>
              <div class="constructor__selection-item" data-value="value51" data-name="Жаккард" data-color="Серо-черные соты">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/51.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черные соты</div>
              </div>
              <div class="constructor__selection-item" data-value="value52" data-name="Жаккард" data-color="Серо-черный ромб">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/52.png')}}');"></div>
                <div class="constructor__selection-name-item">Жаккард<br>Серо-черный ромб</div>
              </div>
            </div>
          </div>

          <div class="constructor__tabs-content">
            <div class="constructor__selection-block" id="materialBaseSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Основа</div>
            </div>
            <div class="constructor__selection-block" id="headrestFrontSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Подголовник</div>
            </div>
            <div class="constructor__selection-block" id="headrestBackSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Подголовник<br>зад</div>
            </div>
            <div class="constructor__selection-block" id="headrestSidesSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Подголовник<br>бок</div>
            </div>
            <div class="constructor__selection-block" id="backTopSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Спинка<br>верх</div>
            </div>
            <div class="constructor__selection-block" id="backBaseSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Спинка</div>
            </div>
            <div class="constructor__selection-block" id="sidewallSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Боковые<br>поддержки</div>
            </div>
            <div class="constructor__selection-block" id="seatBaseSelect">
              <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');">
                <span class="tooltiptext">Нет</span>
              </div>
              <div class="constructor__selection-title">Сиденье</div>
            </div>
          </div>
        </div>

        <div class="constructor__tabs-item" id="constructor__tabs-3">
          <div class="constructor__selection-slider stitch" id="stitchSlider">
            <div id="stitchBtnBack" class="constructor__selection-back"></div>
            <div class="constructor__selection-items">
              <div class="constructor__selection-item" data-value="StitchOn" data-name="Без строчки" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/stitch/0.svg')}}');"></div>
                <div class="constructor__selection-name-item">Без строчки</div>
              </div>
              <div class="constructor__selection-item" data-value="value1" data-name="Черный 901" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Черный 901</div>
              </div>
              <div class="constructor__selection-item" data-value="value2" data-name="Темно-серый 617" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Темно-серый 617</div>
              </div>
              <div class="constructor__selection-item" data-value="value3" data-name="Светло-серый 1615" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Светло-серый 1615</div>
              </div>
              <div class="constructor__selection-item" data-value="value4" data-name="Белый 201" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Белый 201</div>
              </div>
              <div class="constructor__selection-item" data-value="value5" data-name="Бежевый 630" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Бежевый 630</div>
              </div>
              <div class="constructor__selection-item" data-value="value6" data-name="Кремовый 1453" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Кремовый 1453</div>
              </div>
              <div class="constructor__selection-item" data-value="value7" data-name="Светло-коричневый 1539" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Светло-коричневый 1539</div>
              </div>
              <div class="constructor__selection-item" data-value="value8" data-name="Темно-коричневый 840" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Темно-коричневый 840</div>
              </div>
              <div class="constructor__selection-item" data-value="value9" data-name="Оранжевый 1430" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Оранжевый 1430</div>
              </div>
              <div class="constructor__selection-item" data-value="value10" data-name="Бордовый 1715" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Бордовый 1715</div>
              </div>
              <div class="constructor__selection-item" data-value="value11" data-name="Красный 1644" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Красный 1644</div>
              </div>
              <div class="constructor__selection-item" data-value="value12" data-name="Розовый 1984" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Розовый 1984</div>
              </div>
              <div class="constructor__selection-item" data-value="value13" data-name="Желтый 1109" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Желтый 1109</div>
              </div>
              <div class="constructor__selection-item" data-value="value14" data-name="Зеленый 821" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Зеленый 821</div>
              </div>
              <div class="constructor__selection-item" data-value="value15" data-name="Бирюзовый 1799" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Бирюзовый 1799</div>
              </div>
              <div class="constructor__selection-item" data-value="value16" data-name="Синий 1923" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Синий 1923</div>
              </div>
              <div class="constructor__selection-item" data-value="value17" data-name="Темно-серый 544" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Темно-серый 544</div>
              </div>
              <div class="constructor__selection-item" data-value="value18" data-name="Темно-синий 511" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Темно-синий 511</div>
              </div>
              <div class="constructor__selection-item" data-value="value19" data-name="Хаки 981" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Хаки 981</div>
              </div>
              <div class="constructor__selection-item" data-value="value20" data-name="Фиолетовый 1691" data-color="">
                <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                <div class="constructor__selection-name-item">Фиолетовый 1691</div>
              </div>
            </div>
          </div>
          <div class="constructor__selection-block stitch" id="stitchSelect">
            <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/stitch/0.svg')}}');">
              <span class="tooltiptext">Без строчки</span>
            </div>
            <div class="constructor__selection-title">Цвет</div>
          </div>
        </div>
        <div class="constructor__tabs-item" id="constructor__tabs-4">
          <div class="constructor__tabs-content">
            <div class="constructor__selection-slider pattern" id="patternSlider">
              <div id="patternBtnBack" class="constructor__selection-back"></div>
              <div class="constructor__selection-items">
                <div class="constructor__selection-item" data-value="PatternOn" data-name="Без стёжки" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/pattern/0.svg')}}');"></div>
                  <div class="constructor__selection-name-item">Без стёжки</div>
                </div>
                <div class="constructor__selection-item" data-value="value1" data-name="Анаконда" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Анаконда</div>
                </div>
                <div class="constructor__selection-item" data-value="value2" data-name="Кобра" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Кобра</div>
                </div>
                <div class="constructor__selection-item" data-value="value3" data-name="Куб" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Куб</div>
                </div>
                <div class="constructor__selection-item" data-value="value4" data-name="Маленький куб" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Маленький куб</div>
                </div>
                <div class="constructor__selection-item" data-value="value5" data-name="Маленький квадрат" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Маленький квадрат</div>
                </div>
                <div class="constructor__selection-item" data-value="value6" data-name="Паркет" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Паркет</div>
                </div>
                <div class="constructor__selection-item" data-value="value7" data-name="Протектор" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Протектор</div>
                </div>
                <div class="constructor__selection-item" data-value="value8" data-name="Ромб 40" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Ромб 40</div>
                </div>
                <div class="constructor__selection-item" data-value="value9" data-name="Ромб двойной" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Ромб двойной</div>
                </div>
                <div class="constructor__selection-item" data-value="value10" data-name="Ромб двойной маленький" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Ромб двойной маленький</div>
                </div>
                <div class="constructor__selection-item" data-value="value11" data-name="Ромб одинарный" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Ромб одинарный</div>
                </div>
                <div class="constructor__selection-item" data-value="value12" data-name="Ромб одинарный маленький" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Ромб одинарный маленький</div>
                </div>
                <div class="constructor__selection-item" data-value="value13" data-name="Соты 35" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Соты 35</div>
                </div>
                <div class="constructor__selection-item" data-value="value14" data-name="Соты 45" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Соты 45</div>
                </div>
                <div class="constructor__selection-item" data-value="value15" data-name="Соты 60" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Соты 60</div>
                </div>
                <div class="constructor__selection-item" data-value="value16" data-name="Соты разделённые 60" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Соты разделённые 60</div>
                </div>
                <div class="constructor__selection-item" data-value="value17" data-name="Трансформер" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Трансформер</div>
                </div>
                <div class="constructor__selection-item" data-value="value18" data-name="Шестигранник" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Шестигранник</div>
                </div>
                <div class="constructor__selection-item" data-value="value19" data-name="Линии двойные" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Линии двойные</div>
                </div>
                <div class="constructor__selection-item" data-value="value20" data-name="Линии двойные 2" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Линии двойные 2</div>
                </div>
                <div class="constructor__selection-item" data-value="value21" data-name="Линии" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Линии</div>
                </div>
              </div>
            </div>
            <div class="constructor__selection-slider patternColor" id="patternColorSlider">
              <div id="patternColorBtnBack" class="constructor__selection-back"></div>
              <div class="constructor__selection-items">
                <div class="constructor__selection-item" data-value="StitchOn" data-name="Без строчки" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/stitch/0.svg')}}');"></div>
                  <div class="constructor__selection-name-item">Без строчки</div>
                </div>
                <div class="constructor__selection-item" data-value="value1" data-name="Черный 901" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Черный 901</div>
                </div>
                <div class="constructor__selection-item" data-value="value2" data-name="Темно-серый 617" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Темно-серый 617</div>
                </div>
                <div class="constructor__selection-item" data-value="value3" data-name="Светло-серый 1615" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Светло-серый 1615</div>
                </div>
                <div class="constructor__selection-item" data-value="value4" data-name="Белый 201" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Белый 201</div>
                </div>
                <div class="constructor__selection-item" data-value="value5" data-name="Бежевый 630" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Бежевый 630</div>
                </div>
                <div class="constructor__selection-item" data-value="value6" data-name="Кремовый 1453" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Кремовый 1453</div>
                </div>
                <div class="constructor__selection-item" data-value="value7" data-name="Светло-коричневый 1539" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Светло-коричневый 1539</div>
                </div>
                <div class="constructor__selection-item" data-value="value8" data-name="Темно-коричневый 840" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Темно-коричневый 840</div>
                </div>
                <div class="constructor__selection-item" data-value="value9" data-name="Оранжевый 1430" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Оранжевый 1430</div>
                </div>
                <div class="constructor__selection-item" data-value="value10" data-name="Бордовый 1715" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Бордовый 1715</div>
                </div>
                <div class="constructor__selection-item" data-value="value11" data-name="Красный 1644" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Красный 1644</div>
                </div>
                <div class="constructor__selection-item" data-value="value12" data-name="Розовый 1984" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Розовый 1984</div>
                </div>
                <div class="constructor__selection-item" data-value="value13" data-name="Желтый 1109" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Желтый 1109</div>
                </div>
                <div class="constructor__selection-item" data-value="value14" data-name="Зеленый 821" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Зеленый 821</div>
                </div>
                <div class="constructor__selection-item" data-value="value15" data-name="Бирюзовый 1799" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Бирюзовый 1799</div>
                </div>
                <div class="constructor__selection-item" data-value="value16" data-name="Синий 1923" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Синий 1923</div>
                </div>
                <div class="constructor__selection-item" data-value="value17" data-name="Темно-серый 544" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Темно-серый 544</div>
                </div>
                <div class="constructor__selection-item" data-value="value18" data-name="Темно-синий 511" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Темно-синий 511</div>
                </div>
                <div class="constructor__selection-item" data-value="value19" data-name="Хаки 981" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Хаки 981</div>
                </div>
                <div class="constructor__selection-item" data-value="value20" data-name="Фиолетовый 1691" data-color="">
                  <div class="constructor__selection-img" style="background-image: url('{{url('constructor-app/img/main-part/0.png')}}');"></div>
                  <div class="constructor__selection-name-item">Фиолетовый 1691</div>
                </div>
              </div>
            </div>
            <div class="constructor__selection-container">
              <div class="constructor__selection-block pattern" id="patternSelect">
                <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/pattern/0.svg')}}');">
                  <span class="tooltiptext">Без стёжки</span></div>
                <div class="constructor__selection-title">Стёжка</div>
              </div>
              <div class="constructor__selection-block patternColor" id="patternColorSelect">
                <div class="constructor__selection-choice tooltip" style="background-image: url('{{url('constructor-app/img/stitch/0.svg')}}');">
                  <span class="tooltiptext">Без строчки</span></div>
                <div class="constructor__selection-title">Цвет</div>
              </div>
            </div>
            <div class="constructor__checkbox-container">
              <div class="constructor__pattern3d">
                <input type="checkbox" id="pattern3d" name="pattern3d" disabled>
                <label for="pattern3d" class="constructor__pattern3d-checkbox"></label>
                <label for="pattern3d">Объёмная стёжка</label>
              </div>
              <div class="constructor__pattern-headrest">
                <input type="checkbox" id="patternHeadrest" name="patternHeadrest" disabled>
                <label for="patternHeadrest" class="constructor__pattern-headrest-checkbox"></label>
                <label for="patternHeadrest">Убрать на подголовнике</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form class="constructor__user_form" onsubmit="return false">
          <div class="constructor__user_form-titile">Оформить заказ</div>
          <div class="constructor__user_form-auto" id="user_form-auto"></div>
          <div class="constructor__user_form-dis" id="user_form-dis"></div>
          <div class="constructor__user_form-check-block check-block1">
            <input type="checkbox" class="constructor__user_form-install" name="user_form-install" id="user_form-install">
            <label class="constructor__user_form-install-text" for="user_form-install">Установка</label>
          </div>
          <input type="text" class="constructor__user_form-name" placeholder="Ваше имя"  required="">
          <input type="email" class="constructor__user_form-email" placeholder="E-mail" required="">
          <input type="tel" class="constructor__user_form-tel" placeholder="Номер телефона" required="">
          <div class="constructor__user_form-check-block check-block2">
            <input class="constructor__user_form-checkbox" type="checkbox" id="user_form-checkbox" required="">
            <label class="constructor__user_form-checkbox-text" >Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с <a class="privacylink" href="#">Политикой конфиденциальности</a>.</label>
          </div>
          <button class="constructor__user_form-btn" type="submit">Подтвердить</button>
      </form>
      <div class="constructor__end">
        <div class="constructor__end-titile">Спасибо за заказ!</div>
        <div class="constructor__end-text">Наш менеджер свяжится с вами в течении часа</div>
        <div class="constructor__end-btn-containet">
          <div class="constructor__end-btn">Ок!</div>
        </div>
      </div>
      <div class="help tooltip">
        ?
        <span class="tooltiptext">Вкладка 1</span>
      </div>
      <div class="constructor__bottom-form">
        <div class="constructor__select-box">
          <select class="constructor__select" id="complect">
            <option value hidden checked>Комплектность</option>
            <option value="2">2 места (передний ряд)</option>
            <option value="5">5 мест</option>
            <option value="7">7 мест</option>
          </select>
          <div class="constructor__select-arrow"></div>
        </div>
        <a href="#model" class="constructor__popup-model" data-name="informationAvto">Ваш автомобиль</a>
        <div class="constructor__price">8 630 <small>руб.</small></div>
        <div class="constructor__submit-btn-container tooltip">
          <input type="hidden" id="i" value="{{$user}}">
            <div class="constructor-forms">
              <div style="float: none; width:1200px;">
                <div style="float: left; width:230px;">Материалы основы</div>
                <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[materialBase]" id="materialBase" onchange="change_Base(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
                    </select>
                </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы подголовника</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[headrestFront]" id="headrestFront" onchange="change_Podgolovnik_Front(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
          
                      <option value="value46">Жаккард черный</option>
                      <option value="value47">Жаккард бежево-серый</option>
                      <option value="value48">Жаккард серо-синие квадраты</option>
                      <option value="value49">Жаккард темно-синий с точкой</option>
                      <option value="value50">Жаккард черно-серый, малые квадрат</option>
                      <option value="value51">Жаккард серо-черные соты</option>
                      <option value="value52">Жаккард серо-черный ромб</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы подголовника зад</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[headrestBack]" id="headrestBack" onchange="change_Podgolovik_Back(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы подголовника бок</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[headrestSides]" id="headrestSides" onchange="change_Podgolovnik_Sides(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы спинка верх</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[backTop]" id="backTop" onchange="change_spinkaTop(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы спинка</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[backBase]" id="backBase" onchange="change_spinka(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
          
                      <option value="value46">Жаккард черный</option>
                      <option value="value47">Жаккард бежево-серый</option>
                      <option value="value48">Жаккард серо-синие квадраты</option>
                      <option value="value49">Жаккард темно-синий с точкой</option>
                      <option value="value50">Жаккард черно-серый, малые квадрат</option>
                      <option value="value51">Жаккард серо-черные соты</option>
                      <option value="value52">Жаккард серо-черный ромб</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы боковинки</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[SideWall]" id="SideWall" onchange="change_SideWall1(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Материалы сиденье</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[seatBase]" id="seatBase" onchange="change_sidenie(value);">
                      <option value="value1">Аригон гладкая чёрный</option>
                      <option value="value2">Аригон гладкая светло-серый</option>
                      <option value="value3">Аригон гладкая тёмно-серый</option>
                      <option value="value4">Аригон гладкая темно-коричневый</option>
                      <option value="value5">Аригон гладкая светло-коричневый</option>
                      <option value="value6">Аригон гладкая бежевый</option>
                      <option value="value7">Аригон гладкая кремовый</option>
                      <option value="value8">Аригон гладкая белый</option>
                      <option value="value9">Аригон гладкая красный</option>
                      <option value="value10">Аригон гладкая оранжевый</option>
                      <option value="value11">Аригон гладкая синий</option>
          
                      <option value="value16">Аригон перфор. черный</option>
                      <option value="value17">Аригон перфор. светло-серый</option>
                      <option value="value18">Аригон перфор. темно-серый</option>
                      <option value="value19">Аригон перфор. темно-коричневый</option>
                      <option value="value20">Аригон перфор. светло-коричневый</option>
                      <option value="value21">Аригон перфор. бежевый</option>
                      <option value="value22">Аригон перфор. кремовый</option>
                      <option value="value23">Аригон перфор. белый</option>
                      <option value="value24">Аригон перфор. красный</option>
                      <option value="value25">Аригон перфор. оранжевый</option>
                      <option value="value26">Аригон перфор. синий</option>
                      <option value="value27">Аригон перфор. фиолетовый</option>
                      <option value="value28">Аригон перфор. бирюзовый</option>
                      <option value="value29">Аригон перфор. жёлтый</option>
                      <option value="value30">Аригон перфор. зелёный</option>
          
                      <option value="value31">Эко замша чёрный</option>
                      <option value="value32">Эко замша темно-серый</option>
                      <option value="value33">Эко замша светло-серый</option>
                      <option value="value34">Эко замша темно-бежевый</option>
                      <option value="value35">Эко замша темно-коричневый</option>
                      <option value="value36">Эко замша красный</option>
                      <option value="value37">Эко замша песочно-коричневый</option>
                      <option value="value38">Эко замша светло-коричневый</option>
                      <option value="value39">Эко замша светло-синий</option>
          
                      <option value="value40">Велюр черный</option>
                      <option value="value41">Велюр серый</option>
                      <option value="value42">Велюр бежевый</option>
                      <option value="value43">Велюр коричневый</option>
                      <option value="value44">Велюр красный</option>
          
                      <option value="value45">Швайцер</option>
          
                      <option value="value46">Жаккард черный</option>
                      <option value="value47">Жаккард бежево-серый</option>
                      <option value="value48">Жаккард серо-синие квадраты</option>
                      <option value="value49">Жаккард темно-синий с точкой</option>
                      <option value="value50">Жаккард черно-серый, малые квадрат</option>
                      <option value="value51">Жаккард серо-черные соты</option>
                      <option value="value52">Жаккард серо-черный ромб</option>
                    </select>
                  </div>
              </div></br></br>
              <div>
                  <input type="checkbox" id="StitchOn" name="options[StitchOn]" value="StitchOn" onchange="change_StitchOn(value);">
                  <label for="StitchOn">Добавить строчку</label>
              </div></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Цвет строчки</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[stitchBase]" id="stitchBase" onchange="change_Stitch(value);">
                      <option value="value1">Черный 901</option>
                      <option value="value2">Темно-серый 617</option>
                      <option value="value3">Светло-серый 1615</option>
                      <option value="value4">Белый 201</option>
                      <option value="value5">Бежевый 630</option>
                      <option value="value6">Кремовый 1453</option>
                      <option value="value7">Светло-коричневый 1539</option>
                      <option value="value8">Темно-коричневый 840</option>
                      <option value="value9">Оранжевый 1430</option>
                      <option value="value10">Бордовый 1715</option>
                      <option value="value11">Красный 1644</option>
                      <option value="value12">Розовый 1984</option>
                      <option value="value13">Желтый 1109</option>
                      <option value="value14">Зеленый 821</option>
                      <option value="value15">Бирюзовый 1799</option>
                      <option value="value16">Синий 1923</option>
                      <option value="value17">Темно-серый 544</option>
                      <option value="value18">Темно-синий 511</option>
                      <option value="value19">Хаки 981</option>
                      <option value="value20">Фиолетовый 1691</option>
                    </select>
                  </div>
              </div></br></br>
              <div>
                  <input type="checkbox" id="PatternOn" name="options[PatternOn]" value="PatternOn" onchange="change_PatternOn(value);">
                  <label for="PatternOn">Включить стёжку</label>
              </div></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Выбрать стёжку</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[PatternBase]" id="PatternBase" onchange="change_Pattern(value);">
                      <option value="value1">Анаконда</option>
                      <option value="value2">Кобра</option>
                      <option value="value3">Куб</option>
                      <option value="value4">Маленький куб</option>
                      <option value="value5">Маленький квадрат</option>
                      <option value="value6">Паркет</option>
                      <option value="value7">Протектор</option>
                      <option value="value8">Ромб 40</option>
                      <option value="value9">Ромб двойной</option>
                      <option value="value10">Ромб двойной маленький</option>
                      <option value="value11">Ромб одинарный</option>
                      <option value="value12">Ромб одинарный маленький</option>
                      <option value="value13">Соты 35</option>
                      <option value="value14">Соты 45</option>
                      <option value="value15">Соты 60</option>
                      <option value="value16">Соты разделённые 60</option>
                      <option value="value17">Трансформер</option>
                      <option value="value18">Шестигранник</option>
                      <option value="value19">Линии двойные</option>
                      <option value="value20">Линии двойные 2</option>
                      <option value="value21">Линии</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Выбрать стёжку объёмную</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;" name="options[Pattern3dBase]" id="Pattern3dBase" onchange="change_PatternOn_3d(value);">
                      <option value="value1">Анаконда</option>
                      <option value="value2">Кобра</option>
                      <option value="value3">Куб</option>
                      <option value="value4">Маленький куб</option>
                      <option value="value5">Маленький квадрат</option>
                      <option value="value6">Паркет</option>
                      <option value="value7">Протектор</option>
                      <option value="value8">Ромб 40</option>
                      <option value="value9">Ромб двойной</option>
                      <option value="value10">Ромб двойной маленький</option>
                      <option value="value11">Ромб одинарный</option>
                      <option value="value12">Ромб одинарный маленький</option>
                      <option value="value13">Соты 35</option>
                      <option value="value14">Соты 45</option>
                      <option value="value15">Соты 60</option>
                      <option value="value16">Соты разделённые 60</option>
                      <option value="value17">Трансформер</option>
                      <option value="value18">Шестигранник</option>
                      <option value="value19">Линии двойные</option>
                      <option value="value20">Линии двойные 2</option>
                      <option value="value21">Линии</option>
                    </select>
                  </div>
              </div></br></br>
              <div style="float: none; width:1200px;">
                  <div style="float: left; width:230px;">Цвет стёжки</div>
          
                  <div style="float: left; width:150px;">
                    <select style="width:200px;"  name="options[PatternColorBase]" id="PatternColorBase" onchange="change_PatternColor(value);">
                      <option value="value1">Черный 901</option>
                      <option value="value2">Темно-серый 617</option>
                      <option value="value3">Светло-серый 1615</option>
                      <option value="value4">Белый 201</option>
                      <option value="value5">Бежевый 630</option>
                      <option value="value6">Кремовый 1453</option>
                      <option value="value7">Светло-коричневый 1539</option>
                      <option value="value8">Темно-коричневый 840</option>
                      <option value="value9">Оранжевый 1430</option>
                      <option value="value10">Бордовый 1715</option>
                      <option value="value11">Красный 1644</option>
                      <option value="value12">Розовый 1984</option>
                      <option value="value13">Желтый 1109</option>
                      <option value="value14">Зеленый 821</option>
                      <option value="value15">Бирюзовый 1799</option>
                      <option value="value16">Синий 1923</option>
                      <option value="value17">Темно-серый 544</option>
                      <option value="value18">Темно-синий 511</option>
                      <option value="value19">Хаки 981</option>
                      <option value="value20">Фиолетовый 1691</option>
                    </select>
                  </div>
              </div></br></br>
              <div>
                  <input type="checkbox" id="PatternOnHeadrest" name="options[PatternOnpodgolovnik]" value="PatternOnpodgolovnik"
                    onchange="change_PatternOnpodgolovnik(value);">
                  <label for="PatternOnHeadrest">Выключить на подголовнике</label>
              </div></br>
            </div>
          <!--</form>-->
          <button class="constructor__submit-btn grey" type="submit">Заказать</button>
          <span class="tooltiptext">Для оформления заказа необходимо выбрать дизайн, материалы, комплектность и автомобиль</span>
        </div>

        <div class="constructor__submit-text">При нажатии на эту кнопку вы ничего не платите. Менеджер свяжется с вами для
          уточнения заказа.</div>
      </div>
  </div>
  
  <!--Модель вашего автомобиля-->
  <div id="model" class="open_popup mfp-hide">
      <h2>Модель вашего автомобиля</h2>
      <div class="marka_popup">
      </div>
      <button type="button" class="mfp-close">Отмена</button>
  </div>
  <div id="main_materials" class="open_popup open_popup__materials mfp-hide">
      <div class="material_inputs-over">
        <div class="material_inputs-block main-part">
        </div>
      </div>
      <button type="button" class="mfp-close">Отмена</button>
  </div>
  <div id="main_materials2" class="open_popup open_popup__materials mfp-hide">
      <div class="material_inputs-over">
        <div class="material_inputs-block side-tracks">
        </div>
      </div>
      <button type="button" class="mfp-close">Отмена</button>
  </div>
  <div id="main_materials3" class="open_popup open_popup__materials mfp-hide">
      <div class="material_inputs-over">
        <div class="material_inputs-block central-part">
        </div>
      </div>
      <button type="button" class="mfp-close">Отмена</button>
  </div>

    <script src="{{ url('constructor-app/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ url('constructor-app/js/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/jquery.cookie.js') }}"></script>
    <script src="{{ url('constructor-app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('constructor-app/js/slick.min.js') }}"></script>
    <script src="{{ url('constructor-app/js/script.js') }}"></script>
    <script src="{{ url('constructor-app/js/constructor-slider.js') }}"></script>
    <script>

      if ($.cookie('city') == "Пенза") {
        $(".constructor__user_form-check-block.check-block1").addClass('hide');
      };
      console.log($.cookie('city'),$.cookie('city') == "Пенза");

      $('.constructor__submit-btn').on('click', function() {
        if(typeof dataConstructor == "undefined") { return; };
        $('.constructor__user_form').fadeIn('slow');
      });
      $('.constructor__user_form').on('submit', function(e) {
          
          let jsonConstructor = {
              status: "pending",
              auto: new Map,
              list: new Map,
              price: 0,
              c_id: ''
          };
          jsonConstructor.auto.set("Марка", dataConstructor[0].name);
          jsonConstructor.auto.set("Модель", dataConstructor[1].name);
          jsonConstructor.auto.set("Поколение", dataConstructor[2].name);
          
          for (var i = 0; i < arrayQuest.length; i++) {
              jsonConstructor.auto.set(arrayQuestText[i], arrayReturnAnswer[i]);
          };
          
          jsonConstructor.auto.set("Установка", $("#user_form-install").is(':checked') );

          jsonConstructor.auto = Object.fromEntries(jsonConstructor.auto.entries());

          jsonConstructor.list.set("Дизайн", $('.constructor__design.click .constructor__design-name').text() );
          jsonConstructor.list.set("Комплектность", $('#complect option:selected').text() );
          jsonConstructor.list.set("Количество", "1" );

          //Основа
          let base = new Map();
          base.set("Материал", $("#materialBaseSlider .constructor__selection-item.select").data('name') );
          base.set("Цвет", $("#materialBaseSlider .constructor__selection-item.select").data('color') );
          base.set("Value", $("#materialBase").val() );
          base = Object.fromEntries(base.entries());
          jsonConstructor.list.set("Основа", base);
          //Подголовник
          let headrestFront = new Map();
          headrestFront.set("Материал", $("#headrestFrontSlider .constructor__selection-item.select").data('name') );
          headrestFront.set("Цвет", $("#headrestFrontSlider .constructor__selection-item.select").data('color') );
          headrestFront.set("Value", $("#headrestFront").val() );
          headrestFront = Object.fromEntries(headrestFront.entries());
          jsonConstructor.list.set("Подголовник", headrestFront);
          //Подголовник зад
          let headrestBack = new Map();
          headrestBack.set("Материал", $("#headrestBackSlider .constructor__selection-item.select").data('name') );
          headrestBack.set("Цвет", $("#headrestBackSlider .constructor__selection-item.select").data('color') );
          headrestBack.set("Value", $("#headrestBack").val() );
          headrestBack = Object.fromEntries(headrestBack.entries());
          jsonConstructor.list.set("Подголовник зад", headrestBack);
          //Подголовник бок
          let headrestSides = new Map();
          headrestSides.set("Материал", $("#headrestSidesSlider .constructor__selection-item.select").data('name') );
          headrestSides.set("Цвет", $("#headrestSidesSlider .constructor__selection-item.select").data('color') );
          headrestSides.set("Value", $("#headrestSides").val() );
          headrestSides = Object.fromEntries(headrestSides.entries());
          jsonConstructor.list.set("Подголовник бок", headrestSides);
          //Спинка верх
          let backTop = new Map();
          backTop.set("Материал", $("#backTopSlider .constructor__selection-item.select").data('name') );
          backTop.set("Цвет", $("#backTopSlider .constructor__selection-item.select").data('color') );
          backTop.set("Value", $("#backTop").val() );
          backTop = Object.fromEntries(backTop.entries());
          jsonConstructor.list.set("Спинка верх", backTop);
          //Спинка
          let backBase = new Map();
          backBase.set("Материал", $("#backBaseSlider .constructor__selection-item.select").data('name') );
          backBase.set("Цвет", $("#backBaseSlider .constructor__selection-item.select").data('color') );
          backBase.set("Value", $("#backBase").val() );
          backBase = Object.fromEntries(backBase.entries());
          jsonConstructor.list.set("Спинка", backBase);
          //Боковые поддержки
          let sidewall = new Map();
          sidewall.set("Материал", $("#sidewallSlider .constructor__selection-item.select").data('name') );
          sidewall.set("Цвет", $("#sidewallSlider .constructor__selection-item.select").data('color') );
          sidewall.set("Value", $("#SideWall").val() );
          sidewall = Object.fromEntries(sidewall.entries());
          jsonConstructor.list.set("Боковые поддержки", sidewall);
          //Сиденье
          let seatBase = new Map();
          seatBase.set("Материал", $("#seatBaseSlider .constructor__selection-item.select").data('name') );
          seatBase.set("Цвет", $("#seatBaseSlider .constructor__selection-item.select").data('color') );
          seatBase.set("Value", $("#seatBase").val() );
          seatBase = Object.fromEntries(seatBase.entries());
          jsonConstructor.list.set("Сиденье", seatBase);

          //Строчка
          let stitch = new Map();
          stitch.set("Цвет", $("#stitchSelect .tooltiptext").text() );
          stitch.set("Value", $("#stitchBase").val() );
          stitch.set("Сhecked", $("#StitchOn").is(':checked') );
          stitch = Object.fromEntries(stitch.entries());
          jsonConstructor.list.set("Строчка", stitch);
          //jsonConstructor.list.set("Строчка", $("#stitchSelect .tooltiptext").text());

          //Стёжка
          let pattern = new Map();
          pattern.set("Стёжка", $("#patternSelect .tooltiptext").text() );
          if ($("#patternSelect .tooltiptext").text() != "Без стёжки") {
              pattern.set("Цвет", $("#patternColorSelect .tooltiptext").text() );
              pattern.set("Value", $("#PatternColorBase").val() );
              let dop = "";
              if($("#pattern3d").prop('checked')) { dop = "Добавлять поролон, ";  pattern.set("ValueP", $("#Pattern3dBase").val() ); }
                  else dop = "Не добавлять поролон, ";
              if($("#patternHeadrest").prop('checked')) dop = dop + "Убрать на подголовниках"
                  else dop = dop + "Стёжка на подголовниках";
              pattern.set("Доп", dop );
          };
          pattern = Object.fromEntries(pattern.entries());
          jsonConstructor.list.set("Стёжка", pattern);

          jsonConstructor.list = Object.fromEntries(jsonConstructor.list.entries());

          jsonConstructor.price="5000";
          console.log(jsonConstructor); //собраный результат в  консоли
          
          $('.constructor__end').fadeIn('slow');
          $('.constructor__user_form').fadeOut('slow');

          /* отправка запроса */
          /*$.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });*/
          $.ajax({
              type: 'POST',
              /*url: 'https://messys.ru/api/order_pending',*/
              url: '/order',
              dataType: 'json',
              data:{
                  '_token': $('meta[name="csrf-token"]').attr('content'),
                  //'_method': 'POST',
                  options: jsonConstructor,
                  i: document.getElementById("i").value,
                  name: $(".constructor__user_form-name").val(),
                  email: $(".constructor__user_form-email").val(),
                  tel: $(".constructor__user_form-tel").val()
              },
              success: function(data, textStatus) {
                      console.log(textStatus)
                  },
              error: function (data, textStatus, errorThrown) {
                      console.log(data);
                      if (errorThrown.indexOf('401') > -1) alert("Внимание! Форма не отправлена. Превышено ожидание или данные устарели, перезагрузител страницу и попробуйте снова.");
                      if (errorThrown.indexOf('404') > -1) alert("Внимание! Форма не отправлена. Ошибка при отправке.");
                      if (errorThrown.indexOf('403') > -1) alert("Внимание! Форма не отправлена. Ошибка прав доступа.");
                      if (errorThrown.indexOf('408') > -1) alert("Внимание! Форма не отправлена. Сервер не отвечает.");
              }
            });
          
          e.preventDefault();
          return false;    
      });

      /* input form */
      $('.constructor__user_form input').keypress(function(e) {
        if (e.which !== 0) {
          if (e.which == 13) return;
          $(this).val($(this).val()+e.key);
        };
        if (e.which == 32){//space bar
          $(this).val($(this).val()+' ');
        };
      });
      $('.constructor__user_form input').keyup  (function(e) {
        if (e.which == 8) {//backspace
          $(this).val( $(this).val().slice(0, -1) );
        };
      });
    </script>

@mobile
  {{--<input type="hidden" id="i" value="{{$user}}">
    <div class="modile-con" id="">
      <h2 class="modile-con__title">Оформить заказ</h2>
      <form class="modile-con__form" onsubmit="return false">
          <input class="modile-con__form-name modile-con__form-entry" type="text" id="modile-con__name" placeholder="Ваше имя" required="">
          <input class="modile-con__form-email modile-con__form-entry" type="email" id="modile-con__email" placeholder="E-mail">
          <input class="modile-con__form-ask modile-con__form-entry" type="tel" id="modile-con__tel" placeholder="Номер телефона" required=""><br>
          
          <input class="popup-ask__form-checkbox" type="checkbox" name="modile-con__instell" id="modile-con__instell">
          <label class="modile-con__form-checkbox-text" for="modile-con__instell">Нужна установка</label>
          <input class="modile-con__form-ask modile-con__form-entry" type="text" id="mark" placeholder="Модель" required="">
          <input class="modile-con__form-ask modile-con__form-entry" type="text" id="model" placeholder="Марка" required="">
          <input class="modile-con__form-ask modile-con__form-entry" type="text" id="age" placeholder="Год выпуска" required="">
          
          <input class="popup-ask__form-checkbox" type="checkbox" name="consent" id="modile-con__consent" required="">
          <label class="modile-con__form-checkbox-text" for="modile-con__consent">Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с <a class="privacylink" href="#">Политикой конфиденциальности</a>.</label>
          <input class="modile-con__submit-btn" type="submit" name="submit" value="Сохранить">
      </form>
      <div class="modile-con__close-btn"></div>
    </div>

    <script src="{{ url('cconstructor-app/js/jquery-3.4.0.min.js') }}"></script>
    <script>

      $('.modile-con__form').on('submit', function(e) {
          
          let jsonConstructor = {
              status: "pending",
              auto: new Map,
              list: new Map,
              price: 0,
              c_id: ''
          };
          jsonConstructor.auto.set("Марка", $("#mark").val());
          jsonConstructor.auto.set("Модель", $("#model").val());
          jsonConstructor.auto.set("Поколение", $("#age").val());
          
          jsonConstructor.auto.set("Установка", $("#modile-con__instell").is(':checked') );

          jsonConstructor.auto = Object.fromEntries(jsonConstructor.auto.entries());

          jsonConstructor.list.set("Дизайн", "mobile" );
          jsonConstructor.list.set("Комплектность", "mobile" );
          jsonConstructor.list.set("Количество", "mobile" );

            //Основа
            let base = new Map();
            base.set("Материал", "mobile" );
            base.set("Цвет", "mobile" );
            base.set("Value", "mobile" );
            base = Object.fromEntries(base.entries());
            jsonConstructor.list.set("Основа", base);
            //Подголовник
            let headrestFront = new Map();
            headrestFront.set("Материал", "mobile" );
            headrestFront.set("Цвет", "mobile" );
            headrestFront.set("Value", "mobile" );
            headrestFront = Object.fromEntries(headrestFront.entries());
            jsonConstructor.list.set("Подголовник", headrestFront);
            //Подголовник зад
            let headrestBack = new Map();
            headrestBack.set("Материал", "mobile" );
            headrestBack.set("Цвет", "mobile" );
            headrestBack.set("Value", "mobile" );
            headrestBack = Object.fromEntries(headrestBack.entries());
            jsonConstructor.list.set("Подголовник зад", headrestBack);
            //Подголовник бок
            let headrestSides = new Map();
            headrestSides.set("Материал", "mobile" );
            headrestSides.set("Цвет", "mobile" );
            headrestSides.set("Value", "mobile" );
            headrestSides = Object.fromEntries(headrestSides.entries());
            jsonConstructor.list.set("Подголовник бок", headrestSides);
            //Спинка верх
            let backTop = new Map();
            backTop.set("Материал", "mobile" );
            backTop.set("Цвет", "mobile" );
            backTop.set("Value", "mobile" );
            backTop = Object.fromEntries(backTop.entries());
            jsonConstructor.list.set("Спинка верх", backTop);
            //Спинка
            let backBase = new Map();
            backBase.set("Материал", "mobile" );
            backBase.set("Цвет", "mobile" );
            backBase.set("Value", "mobile" );
            backBase = Object.fromEntries(backBase.entries());
            jsonConstructor.list.set("Спинка", backBase);
            //Боковые поддержки
            let sidewall = new Map();
            sidewall.set("Материал", "mobile" );
            sidewall.set("Цвет", "mobile" );
            sidewall.set("Value", "mobile" );
            sidewall = Object.fromEntries(sidewall.entries());
            jsonConstructor.list.set("Боковые поддержки", sidewall);
            //Сиденье
            let seatBase = new Map();
            seatBase.set("Материал", "mobile" );
            seatBase.set("Цвет", "mobile" );
            seatBase.set("Value", "mobile" );
            seatBase = Object.fromEntries(seatBase.entries());
            jsonConstructor.list.set("Сиденье", seatBase);

            //Строчка
            let stitch = new Map();
            stitch.set("Цвет", "mobile" );
            stitch.set("Value", "mobile" );
            stitch.set("Сhecked", "false" );
            stitch = Object.fromEntries(stitch.entries());
            jsonConstructor.list.set("Строчка", stitch);

            //Стёжка
            let pattern = new Map();
            pattern.set("Стёжка", "mobile" );
            pattern.set("Цвет", "mobile" );
            pattern.set("Value", "mobile" );
            let dop = "mobile";
            pattern.set("ValueP", "mobile" ); 
            pattern.set("Доп", dop );

            pattern = Object.fromEntries(pattern.entries());
            jsonConstructor.list.set("Стёжка", pattern);

            jsonConstructor.list = Object.fromEntries(jsonConstructor.list.entries());

            jsonConstructor.price="0";
            console.log(jsonConstructor); //собраный результат в  консоли

          $.ajax({
              type: 'POST',
              /*url: 'https://messys.ru/api/order_pending',*/
              url: '/order',
              dataType: 'json',
              data:{
                  '_token': $('meta[name="csrf-token"]').attr('content'),
                  //'_method': 'POST',
                  options: jsonConstructor,
                  i: document.getElementById("i").value,
                  name: $("#modile-con__name").val(),
                  email: $("#modile-con__email").val(),
                  tel: $("#modile-con__tel").val()
              },
              success: function(data, textStatus) {
                      console.log(textStatus)
                  },
              error: function (data, textStatus, errorThrown) {
                      console.log(data);
                      if (errorThrown.indexOf('401') > -1) alert("Внимание! Форма не отправлена. Превышено ожидание или данные устарели, перезагрузител страницу и попробуйте снова.");
                      if (errorThrown.indexOf('404') > -1) alert("Внимание! Форма не отправлена. Ошибка при отправке.");
                      if (errorThrown.indexOf('403') > -1) alert("Внимание! Форма не отправлена. Ошибка прав доступа.");
                      if (errorThrown.indexOf('408') > -1) alert("Внимание! Форма не отправлена. Сервер не отвечает.");
              }
              });
          
          e.preventDefault();
          return false;    
      });
    </script>--}}
@endmobile

@tablet
  {{--<input type="hidden" id="i" value="{{$user}}">
  <div class="" id="">
    <h2 class="modile-con__title">Оформить заказ</h2>
    <form class="modile-con__form" onsubmit="return false">
        <input class="modile-con__form-name modile-con__form-entry" type="text" id="modile-con__name" placeholder="Ваше имя" required="">
        <input class="modile-con__form-email modile-con__form-entry" type="email" id="modile-con__email" placeholder="E-mail">
        <input class="modile-con__form-ask modile-con__form-entry" type="tel" id="modile-con__tel" placeholder="Номер телефона" required=""><br>
        
        <input class="popup-ask__form-checkbox" type="checkbox" name="modile-con__instell" id="modile-con__instell">
        <label class="modile-con__form-checkbox-text" for="modile-con__instell">Нужна установка</label>
        <input class="modile-con__form-ask modile-con__form-entry" type="text" id="mark" placeholder="Модель" required="">
        <input class="modile-con__form-ask modile-con__form-entry" type="text" id="model" placeholder="Марка" required="">
        <input class="modile-con__form-ask modile-con__form-entry" type="text" id="age" placeholder="Год выпуска" required="">
        
        <input class="popup-ask__form-checkbox" type="checkbox" name="consent" id="modile-con__consent" required="">
        <label class="modile-con__form-checkbox-text" for="modile-con__consent">Нажимая на кнопку, я соглашаюсь на обработку моих персональных данных в соответствии с <a class="privacylink" href="#">Политикой конфиденциальности</a>.</label>
        <input class="modile-con__submit-btn" type="submit" name="submit" value="Сохранить">
    </form>
    <div class="modile-con__close-btn"></div>
  </div>

  <script src="{{ url('constructor-app/js/jquery-3.4.0.min.js') }}"></script>
  <script>

    $('.modile-con__form').on('submit', function(e) {
        
        let jsonConstructor = {
            status: "pending",
            auto: new Map,
            list: new Map,
            price: 0,
            c_id: ''
        };
        jsonConstructor.auto.set("Марка", $("#mark").val());
        jsonConstructor.auto.set("Модель", $("#model").val());
        jsonConstructor.auto.set("Поколение", $("#age").val());
        
        jsonConstructor.auto.set("Установка", $("#modile-con__instell").is(':checked') );

        jsonConstructor.auto = Object.fromEntries(jsonConstructor.auto.entries());

        jsonConstructor.list.set("Дизайн", "mobile" );
        jsonConstructor.list.set("Комплектность", "mobile" );
        jsonConstructor.list.set("Количество", "mobile" );

          //Основа
          let base = new Map();
          base.set("Материал", "mobile" );
          base.set("Цвет", "mobile" );
          base.set("Value", "mobile" );
          base = Object.fromEntries(base.entries());
          jsonConstructor.list.set("Основа", base);
          //Подголовник
          let headrestFront = new Map();
          headrestFront.set("Материал", "mobile" );
          headrestFront.set("Цвет", "mobile" );
          headrestFront.set("Value", "mobile" );
          headrestFront = Object.fromEntries(headrestFront.entries());
          jsonConstructor.list.set("Подголовник", headrestFront);
          //Подголовник зад
          let headrestBack = new Map();
          headrestBack.set("Материал", "mobile" );
          headrestBack.set("Цвет", "mobile" );
          headrestBack.set("Value", "mobile" );
          headrestBack = Object.fromEntries(headrestBack.entries());
          jsonConstructor.list.set("Подголовник зад", headrestBack);
          //Подголовник бок
          let headrestSides = new Map();
          headrestSides.set("Материал", "mobile" );
          headrestSides.set("Цвет", "mobile" );
          headrestSides.set("Value", "mobile" );
          headrestSides = Object.fromEntries(headrestSides.entries());
          jsonConstructor.list.set("Подголовник бок", headrestSides);
          //Спинка верх
          let backTop = new Map();
          backTop.set("Материал", "mobile" );
          backTop.set("Цвет", "mobile" );
          backTop.set("Value", "mobile" );
          backTop = Object.fromEntries(backTop.entries());
          jsonConstructor.list.set("Спинка верх", backTop);
          //Спинка
          let backBase = new Map();
          backBase.set("Материал", "mobile" );
          backBase.set("Цвет", "mobile" );
          backBase.set("Value", "mobile" );
          backBase = Object.fromEntries(backBase.entries());
          jsonConstructor.list.set("Спинка", backBase);
          //Боковые поддержки
          let sidewall = new Map();
          sidewall.set("Материал", "mobile" );
          sidewall.set("Цвет", "mobile" );
          sidewall.set("Value", "mobile" );
          sidewall = Object.fromEntries(sidewall.entries());
          jsonConstructor.list.set("Боковые поддержки", sidewall);
          //Сиденье
          let seatBase = new Map();
          seatBase.set("Материал", "mobile" );
          seatBase.set("Цвет", "mobile" );
          seatBase.set("Value", "mobile" );
          seatBase = Object.fromEntries(seatBase.entries());
          jsonConstructor.list.set("Сиденье", seatBase);

          //Строчка
          let stitch = new Map();
          stitch.set("Цвет", "mobile" );
          stitch.set("Value", "mobile" );
          stitch.set("Сhecked", "false" );
          stitch = Object.fromEntries(stitch.entries());
          jsonConstructor.list.set("Строчка", stitch);

          //Стёжка
          let pattern = new Map();
          pattern.set("Стёжка", "mobile" );
          pattern.set("Цвет", "mobile" );
          pattern.set("Value", "mobile" );
          let dop = "mobile";
          pattern.set("ValueP", "mobile" ); 
          pattern.set("Доп", dop );

          pattern = Object.fromEntries(pattern.entries());
          jsonConstructor.list.set("Стёжка", pattern);

          jsonConstructor.list = Object.fromEntries(jsonConstructor.list.entries());

          jsonConstructor.price="0";
          console.log(jsonConstructor); //собраный результат в  консоли

        $.ajax({
            type: 'POST',
            /*url: 'https://messys.ru/api/order_pending',*/
            url: '/order',
            dataType: 'json',
            data:{
                '_token': $('meta[name="csrf-token"]').attr('content'),
                //'_method': 'POST',
                options: jsonConstructor,
                i: document.getElementById("i").value,
                name: $("#modile-con__name").val(),
                email: $("#modile-con__email").val(),
                tel: $("#modile-con__tel").val()
            },
            success: function(data, textStatus) {
                    console.log(textStatus)
                },
            error: function (data, textStatus, errorThrown) {
                    console.log(data);
                    if (errorThrown.indexOf('401') > -1) alert("Внимание! Форма не отправлена. Превышено ожидание или данные устарели, перезагрузител страницу и попробуйте снова.");
                    if (errorThrown.indexOf('404') > -1) alert("Внимание! Форма не отправлена. Ошибка при отправке.");
                    if (errorThrown.indexOf('403') > -1) alert("Внимание! Форма не отправлена. Ошибка прав доступа.");
                    if (errorThrown.indexOf('408') > -1) alert("Внимание! Форма не отправлена. Сервер не отвечает.");
            }
            });
        
        e.preventDefault();
        return false;    
    });
  </script>--}}
@endtablet