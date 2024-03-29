@if ($posts != null)
    <div class="blog-prev">
        <div class="blog-prev__container">
            <h2 class="blog-prev__title">Еще больше информации в блоге</h2>
            <div class="blog-prev__items">
            <?php $posts_count = 1 ?>
            @foreach ($posts as $title_post => $post)
                @if ($posts_count <= 3)
                    <div class="blog-prev__item">
                        <a href="{{ $post['link'] }}"><div class="blog-prev__img" style="background: url('/{{ $post['img'] }}') center top no-repeat;"></div></a>
                        <div class="blog-prev__description">
                            <a href="{{ $post['link'] }}"><h3 class="blog-prev__subtitle">{{ $title_post }}</h3></a>
                            <div class="blog-prev__text">{{ $post['prew_text'] }}</div>
                        </div>
                    </div>
                @endif
                <?php $posts_count++ ?>
            @endforeach
            </div>
        </div>
    </div>
@endif