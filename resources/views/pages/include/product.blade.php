<div class="product">
    <h2 class="product__title">Наши работы</h2>
    <div class="product__subtitle">Более 2000 автомобильных чехлов из экокожи, замши, велюра и жаккарда. Посмотрите
        наши работы. Будем рады создать чехлы для сидений вашего автомобиля.</div>
    <div class="product__slider" id="product-slider">

        @if ($galleries != null)
            @foreach ($galleries as $title => $gallery)
                <div class="product__item">
                    <div class="product__item-content">
                        <div class="product__bg" style="background-image: url('/{{$gallery[1]}}');"></div>
                        <a href="{{$gallery[2]}}"><h3 class="product__item-title">{{$title}}</h3></a>
                        <a href="{{$gallery[2]}}"><div class="product__item-btn">{!!$gallery[0]!!} фотографий</div></a>
                    </div>
                </div>
            @endforeach
        @endif
        
    </div>
</div>
<div class="product__arrows">
    <div class="product__slick-prev"></div>
    <div class="product__slick-next"></div>
</div>
<div class="product__arrows-margin"></div>