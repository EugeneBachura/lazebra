<?php

use App\Http\Controllers\Admin\AskQuestionController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarModelController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FooterMenuController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LawController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AgeController;
use App\Http\Controllers\Admin\AgeFrameController;
use App\Http\Controllers\Admin\BrandsFrameController;
use App\Http\Controllers\Admin\CarModelsFrameController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SubscriptionController;
use App\Models\AgeFrame;
use App\Models\Brands;
use App\Models\BrandsFrame;
use App\Models\CarModelsFrame;
use App\Models\FooterMenu;
use App\Models\Gallery;
use App\Models\Law;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $page_options = (array) json_decode(DB::table('pages')->where('type', 'main')->pluck('options')->first(), true);
    foreach ($page_options as $page_option) {
       if (isset($page_option["title"])){
        $title = ((array) $page_option["title"])["value"];
       };
       if (isset($page_option["description"])){
        $description = ((array) $page_option["description"])["value"];
       };
       if (isset($page_option["h1"])){
        $h1 = ((array) $page_option["h1"])["value"];
       };
       if (isset($page_option["sliderURL"])){
        $sliders = ((array) $page_option["sliderURL"])["value"];
       };
       if (isset($page_option["stages"])){
        $stages = ((array) $page_option["stages"])["value"];
       };
       if (isset($page_option["frame-covers"])){
        $frame_covers = ((array) $page_option["frame-covers"])["value"];
        $frame_covers_text = ((array) $page_option["frame-covers"])["text"];
        $frame_covers_footnote = ((array) $page_option["frame-covers"])["footnote"];
       };
       if (isset($page_option["model-covers"])){
        $model_covers = ((array) $page_option["model-covers"])["value"];
        $model_covers_text = ((array) $page_option["model-covers"])["text"];
        $model_covers_footnote = ((array) $page_option["model-covers"])["footnote"];
       };
       if (isset($page_option["gallery-list"])){
            if (isset($page_option["gallery-list"]["value"]))
                $gallery_list = ((array) $page_option["gallery-list"])["value"];
            else $gallery_list = null;
            if (isset($page_option["gallery-list"]["hide"]))
                $gallery_list = null;
            if ($gallery_list != null) {
                $show_galleries = [];
                foreach ($gallery_list as $key => $item) {
                    //$show_galleries[DB::table('galleries')->where('id', $key)->value('title')] = [DB::table('galleries')->where('id', $key)->value('quantity'), (array) json_decode(DB::table('galleries')->where('id', $key)->value('options'), true)["value"] ];
                    $show_galleries[DB::table('galleries')->where('id', $key)->value('title')] = [DB::table('galleries')->where('id', $key)->value('quantity'), DB::table('galleries')->where('id', $key)->value('preview'), DB::table('galleries')->where('id', $key)->value('URL') ];
                } 
            } else $show_galleries = null;
        };
    }
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.index', [
        'title'=>$title,
        'description'=>$description,
        'h1'=>$h1,
        'sliders'=>$sliders,
        'stages'=>$stages,
        'frame_covers'=>$frame_covers,
        'frame_covers_text'=>$frame_covers_text,
        'frame_covers_footnote'=>$frame_covers_footnote,
        'model_covers'=>$model_covers,
        'model_covers_text'=>$model_covers_text,
        'model_covers_footnote'=>$model_covers_footnote,
        'galleries'=>$show_galleries,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*Route::get('//', function() {
    return abort(404);
});*/

/*Route::get('/', [App\Http\Controllers\MineController::class, 'index'])->name('index');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin-panel/order/Build/{url1}/{url2?}', function() {
} )->middleware('slashesAdmin');
Route::get('admin-panel/order/Build/Classic07.wasm.code.unityweb', function() {
} )->middleware('slashesAdmin');

Route::middleware(['role:admin'])->prefix('admin-panel')->group( function () { 
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('page', PageController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('brandsframe', BrandsFrameController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('carmodel', CarModelController::class);
    Route::resource('carmodelsframe', CarModelsFrameController::class);
    Route::resource('law', LawController::class);
    Route::resource('ask', AskQuestionController::class);
    Route::resource('partners', PartnershipController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('footer_menu', FooterMenuController::class);
    Route::resource('subscription', SubscriptionController::class);
    Route::resource('age', AgeController::class);
    Route::resource('ageframe', AgeFrameController::class);
    Route::resource('order', OrderController::class)->middleware('slashesAdmin');
});

Route::post('/order', [OrderController::class, 'store']);
Route::post('/city', [CityController::class, 'get_city']);
//Route::post('/order', 'OrderController@store');
//Route::get('/order', [OrderController::class, 'store']);

Route::get('/quest', function() {
    return view('pages.constructor.quest', []);
})->middleware('slashesAdmin');

/* gallery */
Route::get('/'.DB::table('pages')->where('type', 'gallery')->pluck('url')->first().'/{urlgallery}', function($urlgallery) {
    $gallery = DB::table('galleries')->where('url', $urlgallery)->first();
    if( !$gallery ){
        return abort(404);
    }
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.gallery-item', [
        'title'=>$gallery->title,
        'description'=>$gallery->description,
        'h1'=>$gallery->name,
        'img_list'=>((array)json_decode($gallery->options,true))['value'],
        'gallery_url'=>url('/'.DB::table('pages')->where('type', 'gallery')->pluck('url')->first()),
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);;
})->middleware('slashes');

/* requisites */
Route::get('/'.DB::table('pages')->where('type', 'prinfo')->pluck('url')->first().'/{urlpr}', function($urlpr) {
    $type_page = null;
    if (DB::table('laws')->where('type', 'requisites')->pluck('URL')->first() == $urlpr) {
        $page_option = (array)json_decode(DB::table('laws')->where('type', 'requisites')->pluck('options')->first(),true);
        $title = DB::table('laws')->where('type', 'requisites')->pluck('title')->first();
        $description = DB::table('laws')->where('type', 'requisites')->pluck('description')->first();
        $h1 = DB::table('laws')->where('type', 'requisites')->pluck('h1')->first();
        $type_page = "requisites";
    };
    if (DB::table('laws')->where('type', 'offer')->pluck('URL')->first() == $urlpr) {
        $page_option = (array)json_decode(DB::table('laws')->where('type', 'offer')->pluck('options')->first(),true);
        $title = DB::table('laws')->where('type', 'offer')->pluck('title')->first();
        $description = DB::table('laws')->where('type', 'offer')->pluck('description')->first();
        $h1 = DB::table('laws')->where('type', 'offer')->pluck('h1')->first();
        $type_page = "offer";
    };
    if (DB::table('laws')->where('type', 'refund')->pluck('URL')->first() == $urlpr) {
        $page_option = (array)json_decode(DB::table('laws')->where('type', 'refund')->pluck('options')->first(),true);
        $title = DB::table('laws')->where('type', 'refund')->pluck('title')->first();
        $description = DB::table('laws')->where('type', 'refund')->pluck('description')->first();
        $h1 = DB::table('laws')->where('type', 'refund')->pluck('h1')->first();
        $type_page = "offer";
    };
    
    if (isset($page_option["subtitle"])){
        $subtitle = $page_option["subtitle"];
    };
    if (isset($page_option["requisites"])){
        $requisites = $page_option["requisites"];
    };
    if (isset($page_option["editor"])){
        $editor = $page_option["editor"];
    };
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    if ($type_page == "requisites") {
        return view('pages.requizit', [
            'title'=>$title,
            'description'=>$description,
            'h1'=>$h1,
            'subtitle'=>$subtitle,
            'requisites'=>$requisites,
            'prinfo_url'=>url('/'.DB::table('pages')->where('type', 'prinfo')->pluck('url')->first()).'/',
            'main_menu'=>$main_menu,
            'footer_menu'=>$footer_menu,
            'brands'=>$brands,
            'brands_f'=>$brands_f,
            'model_link'=>$model_link,
            'frame_link'=>$frame_link
        ]);
    };
    if ($type_page == "offer") {
        return view('pages.oferta', [
            'title'=>$title,
            'description'=>$description,
            'h1'=>$h1,
            'content'=>$editor,
            'prinfo_url'=>url('/'.DB::table('pages')->where('type', 'prinfo')->pluck('url')->first()).'/',
            'main_menu'=>$main_menu,
            'footer_menu'=>$footer_menu,
            'brands'=>$brands,
            'brands_f'=>$brands_f,
            'model_link'=>$model_link,
            'frame_link'=>$frame_link
        ]);
    };
    
    return abort(404);
})->middleware('slashes');

/*brand*/
Route::get('/{url_covers}/{url_brand}/', function ($url_covers,$url_brand) {
    /*if(( !DB::table('brands')->where('model_link', $url_brand)->first() )&&
    ( !DB::table('brands')->where('frame_link', $url_brand)->first() != null )){
        return abort(404);
    }*/
    if (($url_covers == DB::table('pages')->where('type', 'model-covers')->value('url'))&&(!DB::table('brands')->where('url', $url_brand)->first())) {
        return abort(404);
    };

    if (($url_covers == DB::table('pages')->where('type', 'frame-covers')->value('url'))&&(!DB::table('brands_frames')->where('url', $url_brand)->first())) {
        return abort(404);
    };

    if( $url_covers != DB::table('pages')->where('type', 'model-covers')->value('url') ){
        if( $url_covers != DB::table('pages')->where('type', 'frame-covers')->value('url') ){
            return abort(404);
        }
    }
    if( $url_covers == DB::table('pages')->where('type', 'model-covers')->value('url') ) {
        $covers = 'model';
        $brand = (array)DB::table('brands')->where('url', $url_brand)->first();
        $brand_models = DB::table('car_models')->where('brand_id', $brand['id'])->get(); 
    };
    if( $url_covers == DB::table('pages')->where('type', 'frame-covers')->value('url') ) {
        $covers = 'frame';
        $brand = (array)DB::table('brands_frames')->where('url', $url_brand)->first();
        $brand_models = DB::table('car_models_frames')->where('brand_id', $brand['id'])->get(); 
    };

    $page_options = (array) json_decode($brand['options'],true);

    if ($brand['gallery_id'] != null) {
        $gallery = DB::table('galleries')->where('id', $brand['gallery_id'])->pluck('options')->first();
        $gallery = json_decode($gallery,true);
    } else $gallery = null;

    foreach ($page_options as $page_option) {
        /*if (isset($page_option["slider"])){
            $sliders = ((array) $page_option["slider"])["value"];
        };*/
        if (isset($page_option["question-list"])){
            if (isset($page_option["question-list"]["value"]))
                $question_list = ((array) $page_option["question-list"])["value"];
            else $question_list = null;
            if (isset($page_option["question-list"]["hide"]))
                $question_list = null;
            if ($question_list != null) {
                $show_questions = [];
                foreach ($question_list as $key => $item) {
                    $show_questions[DB::table('questions')->where('id', $key)->value('title')] = DB::table('questions')->where('id', $key)->value('text');
                }
            } else $show_questions = null;
        };
        if (isset($page_option["price"])){
            $price = ((array) $page_option["price"])["value"];
        };
        if (isset($page_option["editor"])){
            $editor = ((array) $page_option["editor"])["value"];
        };
    }


    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.brand', [
        'title'=> $brand['title'],
        'h1'=> $brand['title'],
        'subtitle'=> $brand['subtitle'],
        'description'=> $brand['description'],
        'name_brand'=> $brand['name'],
        'brand_models' => $brand_models,
        'base_url' => '/'.$url_covers.'/'.$url_brand.'/',
        'covers' => $covers,
        //'sliders' => $sliders,
        'gallery' => $gallery,
        'questions'=> $show_questions,
        'price'=> $price,
        'content'=> $editor,
        'covers_url'=> url($url_covers),
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*posts*/
Route::get('/blog/{url_cat}/{url_post}/', function ($url_cat, $url_post) {
    $post = DB::table('posts')->where('url', $url_post)->first();
    if( !$post ){
        return abort(404);
    }
    $id_cat = DB::table('posts')->where('url', $url_post)->value('cat_id');
    $cat = DB::table('categories')->where('id', $id_cat)->first();
    if( !$cat ){
        return abort(404);
    }
    $prev_posts = Post::orderBy('created_at','desc')->take(3)->get();

    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    if ($url_post == 'difference') 
    return view('pages.difference', [
        'title'=>$post->title,
        'description'=>$post->description,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'this_post'=>(array)$post,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
    return view('pages.article', [
        'title'=>$post->title,
        'description'=>$post->description,
        'posts'=>$prev_posts,
        'this_post'=>(array)$post,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*model*/
Route::get('/{url_covers}/{url_brand}/{url_model}', function ($url_covers,$url_brand,$url_model) {

    if( $url_covers == DB::table('pages')->where('type', 'model-covers')->value('url') ) {
        $covers = 'model';
    } else if( $url_covers == DB::table('pages')->where('type', 'frame-covers')->value('url') ) {
        $covers = 'frame';
        } else abort(404);

    if ($covers == 'model') {
        if ( (!DB::table('car_models')->where('url', $url_model)->first())||
            (!DB::table('brands')->where('url', $url_brand)->first()) )
                return abort(404);
        $brand_options = (array) json_decode(DB::table('brands')->where('url', $url_brand)->pluck('options')->first(), true);
        $brand_gallery = (array) json_decode(DB::table('brands')->where('url', $url_brand)->pluck('gallery_id')->first(), true);
    };
    if ($covers == 'frame') {
            if ( (!DB::table('car_models_frames')->where('url', $url_model)->first())||
                (!DB::table('brands_frames')->where('url', $url_brand)->first()) )
                return abort(404);
                $brand_options = (array) json_decode(DB::table('brands_frames')->where('url', $url_brand)->pluck('options')->first(), true);
                $brand_gallery = (array) json_decode(DB::table('brands_frames')->where('url', $url_brand)->pluck('gallery_id')->first(), true);   
    };

    foreach ($brand_options as $brand_option) {
        if (isset($brand_option["slider"])){
            $sliders = ((array) $brand_option["slider"])["value"];
        };
        if (isset($brand_option["price"])){
            $price = ((array) $brand_option["price"])["value"];
        };
        if (isset($brand_option["editor"])){
            $content = ((array) $brand_option["editor"])["value"];
        };
    };

    if ($covers == 'model') {
        $model = DB::table('car_models')->where('url', $url_model)->first();
        $model_ages = DB::table('ages')->where('model_id', $model->id)->get();
    };
    if ($covers == 'frame') {
        $model = DB::table('car_models_frames')->where('url', $url_model)->first();
        $model_ages = DB::table('age_frames')->where('model_id', $model->id)->get();
    };

    $page_options = (array) json_decode($model->options, true);
    foreach ($page_options as $page_option) {
        /*if (isset($page_option["parameter1"])){
            $parameter1 = ((array) $page_option["parameter1"])["value"];
        };
        if (isset($page_option["parameter2"])){
            $parameter2 = ((array) $page_option["parameter2"])["value"];
        };
        if (isset($page_option["parameter3"])){
            $parameter3 = ((array) $page_option["parameter3"])["value"];
        };
        if (isset($page_option["parameter4"])){
            $parameter4 = ((array) $page_option["parameter4"])["value"];
        };
        if (isset($page_option["parameter5"])){
            $parameter5 = ((array) $page_option["parameter5"])["value"];
        };*/
        if (isset($page_option["question-list"])){
            if (isset($page_option["question-list"]["value"]))
                $question_list = ((array) $page_option["question-list"])["value"];
            else $question_list = null;
            if (isset($page_option["question-list"]["hide"]))
                $question_list = null;
            if ($question_list != null) {
                $show_questions = [];
                foreach ($question_list as $key => $item) {
                    $show_questions[DB::table('questions')->where('id', $key)->value('title')] = DB::table('questions')->where('id', $key)->value('text');
                }
            } else $show_questions = null;
        };
    };

    if ($brand_gallery != null) {
        $gallery = DB::table('galleries')->where('id', $brand_gallery)->pluck('options')->first();
        $gallery = json_decode($gallery,true);
    } else $gallery = null;
    
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.model', [
        'title' => $model->title,
        'h1' => $model->h1,
        'subtitle' => $model->subtitle,
        'description' => $model->description,
        'base_url' => '/'.$url_covers.'/'.$url_brand.'/'.$url_model.'/',
        'name_model' => $model->name,
        'name_brand' => DB::table('brands')->where('id',$model->brand_id)->pluck('name')->first(),
        //'sliders' => $sliders,
        'content' => $content,
        'gallery' => $gallery,
        'price' => $price,
        'covers' => $covers,
        'model_ages' => $model_ages,
        'covers_url'=> url($url_covers),
        'brand_url'=> url($url_covers,$url_brand),
        //'parameter1'=> $parameter1,
        //'parameter2'=> $parameter2,
        //'parameter3'=> $parameter3,
        //'parameter4'=> $parameter4,
        //'parameter5'=> $parameter5,*/
        'questions'=> $show_questions,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*age*/
Route::get('/{url_covers}/{url_brand}/{url_model}/{url_age}', function ($url_covers,$url_brand,$url_model,$url_age) {

    if( $url_covers == DB::table('pages')->where('type', 'model-covers')->value('url') ) {
        $covers = 'model';
    } else if( $url_covers == DB::table('pages')->where('type', 'frame-covers')->value('url') ) {
        $covers = 'frame';
        } else abort(404);

    if ($covers == 'model') {
        if ( (!DB::table('car_models')->where('url', $url_model)->first())||
            (!DB::table('brands')->where('url', $url_brand)->first())||
            (!DB::table('ages')->where('url', $url_age)->first()) )
                return abort(404);
        $brand_options = (array) json_decode(DB::table('brands')->where('url', $url_brand)->pluck('options')->first(), true);
        $brand_gallery = (array) json_decode(DB::table('brands')->where('url', $url_brand)->pluck('gallery_id')->first(), true);
    };
    if ($covers == 'frame') {
            if ( (!DB::table('car_models_frames')->where('url', $url_model)->first())||
                (!DB::table('brands_frames')->where('url', $url_brand)->first())||
                (!DB::table('age_frames')->where('url', $url_age)->first()) )
                return abort(404);
                $brand_options = (array) json_decode(DB::table('brands_frames')->where('url', $url_brand)->pluck('options')->first(), true);
                $brand_gallery = (array) json_decode(DB::table('brands_frames')->where('url', $url_brand)->pluck('gallery_id')->first(), true);   
    };

    foreach ($brand_options as $brand_option) {
        if (isset($brand_option["slider"])){
            $sliders = ((array) $brand_option["slider"])["value"];
        };
    };

    if ($covers == 'model') {
        $model = DB::table('car_models')->where('url', $url_model)->first();
        $age = DB::table('ages')->where('url', $url_age)->first();
    };
        
    if ($covers == 'frame') {
        $model = DB::table('car_models_frames')->where('url', $url_model)->first();
        $age = DB::table('age_frames')->where('url', $url_age)->first();
    };

    $page_options = (array) json_decode($age->options, true);
    foreach ($page_options as $page_option) {
        if (isset($page_option["parameter1"])){
            $parameter1 = ((array) $page_option["parameter1"])["value"];
        };
        if (isset($page_option["parameter2"])){
            $parameter2 = ((array) $page_option["parameter2"])["value"];
        };
        if (isset($page_option["parameter3"])){
            $parameter3 = ((array) $page_option["parameter3"])["value"];
        };
        if (isset($page_option["parameter4"])){
            $parameter4 = ((array) $page_option["parameter4"])["value"];
        };
        if (isset($page_option["parameter5"])){
            $parameter5 = ((array) $page_option["parameter5"])["value"];
        };
        if (isset($page_option["question-list"])){
            if (isset($page_option["question-list"]["value"]))
                $question_list = ((array) $page_option["question-list"])["value"];
            else $question_list = null;
            if (isset($page_option["question-list"]["hide"]))
                $question_list = null;
            if ($question_list != null) {
                $show_questions = [];
                foreach ($question_list as $key => $item) {
                    $show_questions[DB::table('questions')->where('id', $key)->value('title')] = DB::table('questions')->where('id', $key)->value('text');
                }
            } else $show_questions = null;
        };
    };

    if ($brand_gallery != null) {
        $gallery = DB::table('galleries')->where('id', $brand_gallery)->pluck('options')->first();
        $gallery = json_decode($gallery,true);
    } else $gallery = null;
    
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.age', [
        'title' => $age->title,
        'h1' => $age->h1,
        'subtitle' => $age->subtitle,
        'description' => $age->description,
        'name_age' => $age->name,
        'covers' => $covers,
        'name_model' => $model->name,
        'name_brand' => DB::table('brands')->where('id',$model->brand_id)->pluck('name')->first(),
        //'sliders' => $sliders,
        'gallery' => $gallery,
        'covers_url'=> url($url_covers),
        'brand_url'=> url($url_covers,$url_brand),
        'parameter1'=> $parameter1,
        'parameter2'=> $parameter2,
        'parameter3'=> $parameter3,
        'parameter4'=> $parameter4,
        'parameter5'=> $parameter5,
        'questions'=> $show_questions,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*blog*/
Route::get('/blog/', function () {
    $posts = Post::orderBy('created_at','desc')->get();

    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();
    return view('pages.blog', [
        'title'=>'Блог',
        'description'=>'Описание',
        'posts'=>$posts,
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu,
        'brands'=>$brands,
        'brands_f'=>$brands_f,
        'model_link'=>$model_link,
        'frame_link'=>$frame_link
    ]);
})->middleware('slashes');

/*constructor*/
Route::get('/c', function () {
        $main_menu = Menu::orderBy('id', 'ASC')->get();
        $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
        if (Auth::user() == null) {
            $user_id = 0;
        }
            else {
                $user_id = Auth::user()->id;
            }
        return view('pages.constructor.index', [
            'main_menu'=>$main_menu,
            'footer_menu'=>$footer_menu,
            'user'=>$user_id
        ]);
});

/*Route::get('order', 'OrderController@create');
Route::post('order', 'OrderController@store');*/
//Route::resource('order', OrderController::class);

/*Route::get('/c/', function () {
    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    return view('pages.constructor.index', [
        'main_menu'=>$main_menu,
        'footer_menu'=>$footer_menu
    ]);
});*/

Route::get('/{url_page}/', function ($url_page) {
    $url = DB::table('pages')->where('url', $url_page)->first();
    if( !$url ){
        return abort(404);
    }
    $type = DB::table('pages')->where('url', $url_page)->pluck('type')->first();
    $id = DB::table('pages')->where('url', $url_page)->pluck('id')->first();
    $page_options = (array) json_decode(DB::table('pages')->where('id', $id)->pluck('options')->first(), true);
    
    foreach ($page_options as $page_option) {
        if (isset($page_option["title"])){
            $title = ((array) $page_option["title"])["value"];
        };
        if (isset($page_option["description"])){
            $description = ((array) $page_option["description"])["value"];
        };
        if (isset($page_option["h1"])){
            $h1 = ((array) $page_option["h1"])["value"];
        };
        if (isset($page_option["subtitle"])){
            $subtitle = ((array) $page_option["subtitle"])["value"];
        };
        if (isset($page_option["price"])){
            $price = ((array) $page_option["price"])["value"];
        };
        if (isset($page_option["model-advantages-slider"])){
            $model_sliders = ((array) $page_option["model-advantages-slider"])["value"];
        };
        if (isset($page_option["advantages"])){
            $advantages = ((array) $page_option["advantages"])["value"];
            $advantages_title = ((array) $page_option["advantages"])["title"]["value"];
        };
        if (isset($page_option["gallery-list"])){
            if (isset($page_option["gallery-list"]["value"]))
                $gallery_list = ((array) $page_option["gallery-list"])["value"];
            else $gallery_list = null;
            if (isset($page_option["gallery-list"]["hide"]))
                $gallery_list = null;
            if ($gallery_list != null) {
                $show_galleries = [];
                foreach ($gallery_list as $key => $item) {
                    //$show_galleries[DB::table('galleries')->where('id', $key)->value('title')] = [DB::table('galleries')->where('id', $key)->value('quantity'), (array) json_decode(DB::table('galleries')->where('id', $key)->value('options'), true)["value"] ];
                    $show_galleries[DB::table('galleries')->where('id', $key)->value('name')] = [DB::table('galleries')->where('id', $key)->value('quantity'), DB::table('galleries')->where('id', $key)->value('preview'), DB::table('galleries')->where('id', $key)->value('URL') ];
                } 
            } else $show_galleries = null;
        };
        if (isset($page_option["question-list"])){
            if (isset($page_option["question-list"]["value"]))
                $question_list = ((array) $page_option["question-list"])["value"];
            else $question_list = null;
            if (isset($page_option["question-list"]["hide"]))
                $question_list = null;
            if ($question_list != null) {
                $show_questions = [];
                foreach ($question_list as $key => $item) {
                    $show_questions[DB::table('questions')->where('id', $key)->value('title')] = DB::table('questions')->where('id', $key)->value('text');
                }
            } else $show_questions = null;
        };
        if (isset($page_option["big-banner"])){
            $big_banner = ((array) $page_option["big-banner"])["value"];
            $big_banner_bg = ((array) $page_option["big-banner"])["bg"];
        };
        if (isset($page_option["slider"])){
            $sliders = ((array) $page_option["slider"])["value"];
        };
        if (isset($page_option["info-block"])){
            $info_block = ((array) $page_option["info-block"])["value"];
        };
        /*if (isset($page_option["brand-list"])){
            if (isset($page_option["brand-list"]["value"]))
                $brand_list = ((array) $page_option["brand-list"])["value"];
            else $brand_list = null;
            if (isset($page_option["brand-list"]["hide"]))
                $brand_list = null;
            if ($brand_list != null) {
                $show_brands = [];
                foreach ($brand_list as $key => $item) {
                    if ($page_option["brand-list"]["cat"]=="frame")
                        $show_brands[DB::table('brands_frames')->where('id', $key)->value('img')] = DB::table('brands_frames')->where('id', $key)->value('url');
                    if ($page_option["brand-list"]["cat"]=="model")
                        $show_brands[DB::table('brands')->where('id', $key)->value('img')] = DB::table('brands')->where('id', $key)->value('url');
                }
            } else $show_brands = null;
        };*/
        if (isset($page_option["post-list"])){
            if (isset($page_option["post-list"]["value"]))
                $post_list = ((array) $page_option["post-list"])["value"];
            else $post_list = null;
            if (isset($page_option["post-list"]["hide"]))
                $post_list = null;
            if ($post_list != null) {
                $show_posts = [];
                foreach ($post_list as $key => $item) {
                    $show_posts[DB::table('posts')->where('id', $key)->value('title')] = [
                        'img'=>DB::table('posts')->where('id', $key)->value('img'),
                        'link'=> url('blog/'.DB::table('categories')->where('id', DB::table('posts')->where('id', $key)->value('cat_id') )->value('url').'/'.DB::table('posts')->where('id', $key)->value('url').'/' ),
                        'prew_text'=>DB::table('posts')->where('id', $key)->value('prew_text')
                    ];
                }
            } else $show_posts = null;
        };
        if (isset($page_option["editor"])){
            $editor = ((array) $page_option["editor"])["value"];
        };
        if (isset($page_option["editor2"])){
            $editor2 = ((array) $page_option["editor2"])["value"];
        };
        if (isset($page_option["video"])){
            $video = ((array) $page_option["video"])["value"];
        };
        #contacts
        if (isset($page_option["titleBlock1"])){
            $titleBlock1 = ((array) $page_option["titleBlock1"])["value"];
        };
        if (isset($page_option["titleBlock2"])){
            $titleBlock2 = ((array) $page_option["titleBlock2"])["value"];
        };
        if (isset($page_option["titleBlock3"])){
            $titleBlock3 = ((array) $page_option["titleBlock3"])["value"];
        };
        if (isset($page_option["contact1"])){
            $contact1 = ($page_option["contact1"])["value"];
        };
        if (isset($page_option["contact2"])){
            $contact2 = ((array) $page_option["contact2"])["value"];
        };
        if (isset($page_option["contact3"])){
            $contact3 = ((array) $page_option["contact3"])["value"];
        };
        if (isset($page_option["contact4"])){
            $contact4 = ((array) $page_option["contact4"])["value"];
        };
        if (isset($page_option["inviteTitle"])){
            $inviteTitle=((array) $page_option["inviteTitle"])["value"];
        };
        if (isset($page_option["inviteSubtitle"])){
            $inviteSubtitle=((array) $page_option["inviteSubtitle"])["value"];
        };
        if (isset($page_option["inviteURL"])){
            $inviteURL=((array) $page_option["inviteURL"])["value"];
        };
        /* partner */
        if (isset($page_option["block_img_but"])){
            $block_img_but=((array) $page_option["block_img_but"])["value"];
        };
        /* delivery */
        if (isset($page_option["items"])){
            $items=((array) $page_option["items"])["value"];
        };
        /* materials */
        if (isset($page_option["materials"])){
            $materials=((array) $page_option["materials"])["value"];
        };
        if (isset($page_option["many_pic"])){
            $many_pic=((array) $page_option["many_pic"])["value"];
        };
        if (isset($page_option["many_pic2"])){
            $many_pic2=((array) $page_option["many_pic2"])["value"];
        };
    };

    $main_menu = Menu::orderBy('id', 'ASC')->get();
    $footer_menu = FooterMenu::orderBy('id', 'ASC')->get();
    $brands = Brands::orderBy('id', 'ASC')->get();
    $brands_f = BrandsFrame::orderBy('id', 'ASC')->get();
    $model_link = DB::table('pages')->where('type', 'model-covers')->pluck('url')->first();
    $frame_link = DB::table('pages')->where('type', 'frame-covers')->pluck('url')->first();

    switch ($type) {
        case 'main' :   return redirect('/');
                        break;
        case 'model-covers' :   return view('pages.model-covers', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'subtitle'=>$subtitle,
                                    'price'=>$price,
                                    'sliders'=>$model_sliders,
                                    'advantages'=>$advantages,
                                    'galleries'=>$show_galleries,
                                    'questions'=>$show_questions,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'frame-covers' :   return view('pages.frame-covers', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'subtitle'=>$subtitle,
                                    'big_banner'=>$big_banner,
                                    'big_banner_bg'=>$big_banner_bg,
                                    'sliders'=>$sliders,
                                    'advantages'=>$advantages,
                                    'advantages_title'=>$advantages_title,
                                    'info_block'=>$info_block,
                                    'brands_f'=>$brands_f,
                                    'questions'=>$show_questions,
                                    'posts'=>$show_posts,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'contacts' :       return view('pages.contacts', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'titleBlock1'=>$titleBlock1,
                                    'titleBlock2'=>$titleBlock2,
                                    'titleBlock3'=>$titleBlock3,
                                    'contact1'=>$contact1,
                                    'contact2'=>$contact2,
                                    'contact3'=>$contact3,
                                    'contact4'=>$contact4,
                                    'inviteTitle'=>$inviteTitle,
                                    'inviteSubtitle'=>$inviteSubtitle,
                                    'inviteURL'=>$inviteURL,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'faq' :       return view('pages.faq', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'questions'=>$show_questions,
                                    'subtitle'=>$subtitle,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'gallery' :       return view('pages.gallery', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'galleries'=>$show_galleries,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'prinfo' :       return view('pages.prinfo', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'laws'=>Law::orderBy('updated_at', 'DESC')->get(),
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'install' :       return view('pages.install', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'content'=>$editor,
                                    'video'=>$video,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'partner' :       return view('pages.partner', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'block1'=>$block_img_but,
                                    'content'=>$editor,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;       
        case 'guarantee' :       return view('pages.guarantee', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'content'=>$editor,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'delivery' :       return view('pages.delivery', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'content1'=>$editor,
                                    'content2'=>$editor2,
                                    'items'=>$items,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'materials' :       return view('pages.materials', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'materials'=>$materials,
                                    'many_pic1'=>$many_pic,
                                    'many_pic2'=>$many_pic2,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break; 
        case 'about' :       return view('pages.about', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'content'=>$editor,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        case 'constructor' :       return view('pages.constructor', [
                                    'title'=>$title,
                                    'description'=>$description,
                                    'h1'=>$h1,
                                    'content1'=>$editor,
                                    'content2'=>$editor2,
                                    'main_menu'=>$main_menu,
                                    'footer_menu'=>$footer_menu,
                                    'brands'=>$brands,
                                    'brands_f'=>$brands_f,
                                    'model_link'=>$model_link,
                                    'frame_link'=>$frame_link
                                ]);
                                break;
        default: return abort(404);
    }
})->middleware('slashes');

