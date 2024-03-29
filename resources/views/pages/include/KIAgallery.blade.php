@if ($gallery != null)
    <div class="kiagallery">
        <h2 class="kiagallery__title">Галерея наших чехлов для {{$name_brand}}</h2>
        <div class="kiagallery__text">Чехлы представленные на фотографиях служат примером того, как они выглядят на сиденьях указанного автомобиля. Цвет и материал при этом можно выбрать любой.</div>
        <div class="kiagallery__slider" id="kiagallerySlider">
            @foreach ($gallery['value'] as $g_item)
                @if (($g_item != null)||($g_item != ""))
                    <div class="kiagallery__item" style="background-image: url('{{url('/')}}/{{$g_item}}');">
                        <div class="kiagallery__content"></div>
                    </div>
                @endif
            @endforeach
            @foreach ($gallery['value'] as $g_item)
                @if (($g_item != null)||($g_item != ""))
                    <div class="kiagallery__item" style="background-image: url('{{url('/')}}/{{$g_item}}');">
                        <div class="kiagallery__content"></div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="kiagallery__arrows">
            <div class="kiagallery__slick-prev slick-arrow"></div>
            <div class="kiagallery__slick-next slick-arrow"></div>
        </div>
        <div class="kiagallery__arrows-margin"></div>
    </div>
@endif