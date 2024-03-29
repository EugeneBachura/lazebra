@if ($posts != null)
    <div class="blog-prev">
        <div class="blog-prev__container">
            <h2 class="blog-prev__title">Еще больше информации в блоге</h2>
            <div class="blog-prev__items">
            @foreach ($posts as $post)
                <div class="blog-prev__item">
                    <a href="{{ url('blog/'.DB::table('categories')->where('id', DB::table('posts')->where('id', $post['id'])->value('cat_id') )->value('url').'/'.$post['url'].'/' )}}"><div class="blog-prev__img" style="background: url('/{{ $post['img'] }}') center top no-repeat;"></div></a>
                    <div class="blog-prev__description">
                       <a href="{{ url('blog/'.DB::table('categories')->where('id', DB::table('posts')->where('id', $post['id'])->value('cat_id') )->value('url').'/'.$post['url'].'/' )}}"><h3 class="blog-prev__subtitle">{{ $post['title'] }}</h3></a>
                       <div class="blog-prev__text">{{ $post['prew_text'] }}</div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endif