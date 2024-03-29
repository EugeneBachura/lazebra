@extends('layouts.admin_layout')

@section('title', 'Редактировать страницу')

@section('style')
<style>
    .check-group .inactive {
        opacity: 0.5;
        position: relative;
    }
    .check-group .inactive::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.089);
        height: 100%;
        width: 100%;
        position: absolute;
        top:0;
        left: 0;
    }
</style>@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать страницу: {{ $page['title'] }}</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
    @if (session('success')) 
      <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
          <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
      </div> 
    @endif

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">      
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('page.update', $page['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            
                           <div class="form-group" @if ($page['type'] == 'main' ) style="display: none" @endif >
                               <label for="url">URL</label>
                               <input type="text" maxlength="250" value="{{ $page['url'] }}" name="url" class="form-control" placeholder="Введите url-адрес" required
                               @if ($page['type'] == 'main' )
                                   readonly
                               @endif
                               >
                           </div>
                            @foreach ($options as $order => $item)
                                @foreach ($item as $name => $option)
                                    <div class="form-group mb-3">
                                        <input type="text" value="{{$option['display']}}" name="options[{{$order}}][{{$name}}][display]" class="form-control" placeholder="" required readonly style="display: none">
                                        <input type="text" value="{{$option['type']}}" name="options[{{$order}}][{{$name}}][type]" class="form-control" placeholder="" required readonly style="display: none">

                                        @switch($option['type'])
                                            @case("text")<!-- text -->
                                                <input type="text" value="{{$option['required']}}" name="options[{{$order}}][{{$name}}][required]" class="form-control" placeholder="" required readonly style="display: none">
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                <input type="{{$option['type']}}" value="{{$option['value']}}" name="options[{{$order}}][{{$name}}][value]" class="form-control" placeholder="" 
                                                @if ($option['required'])
                                                    required
                                                @endif >
                                            @break

                                            <!-- number -->
                                            @case("number")
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                <input type="{{$option['type']}}" value="{{$option['value']}}" name="options[{{$order}}][{{$name}}][value]" class="form-control" placeholder="" required>
                                            @break

                                            <!-- textarea -->
                                            @case("textarea")
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                <textarea rows="{{$option['rows']}}" maxlength="{{$option['maxlength']}}" name="options[{{$order}}][{{$name}}][value]" class="form-control" required>{{$option['value']}}</textarea>
                                                <input type="text" value="{{$option['rows']}}" name="options[{{$order}}][{{$name}}][rows]" class="form-control" placeholder="" required readonly style="display: none">
                                                <input type="text" value="{{$option['maxlength']}}" name="options[{{$order}}][{{$name}}][maxlength]" class="form-control" placeholder="" required readonly style="display: none">
                                            @break

                                            <!-- editor -->
                                            @case("editor")
                                                <div class="form-group">
                                                    <label>{{$option['display']}}</label>
                                                    <textarea name="options[{{$order}}][{{$name}}][value]" class="editor">{{$option['value']}}</textarea>
                                                </div>
                                            @break

                                            <!-- sliderURL -->
                                            @case("sliderURL")
                                                <div class="form-group slider row">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    @foreach ($option['value'] as $name_slider => $slider)
                                                        @if (($slider['img'] == "")||($slider['img'] == null))
                                                            <div class="slider-item hide mb-3 col-6" id="slider{{$name_slider}}">
                                                                <div class="border p-3">
                                                                    Картинка
                                                                    <input type="text" value="" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][img]" class="form-control" id="feature_image{{$name}}{{$name_slider}}" readonly >
                                                                    <a href="" class="popup_selector" data-inputid="feature_image{{$name}}{{$name_slider}}">Выбрать изображение</a><br>
                                                                    Ссылка<input type="text" value="" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][link]" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="slider-item show mb-3 col-6" id="slider{{$name_slider}}">
                                                                <div class="border p-3">
                                                                    Картинка
                                                                    <input type="text" value="{{$slider['img']}}" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][img]" class="form-control" id="feature_image{{$name_slider}}" readonly >
                                                                    <a href="" class="popup_selector" data-inputid="feature_image{{$name_slider}}">Выбрать изображение</a><br>
                                                                    Ссылка<input type="text" value="{{$slider['link']}}" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][link]" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <br>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-info slider__add">Добавить слайд</button>
                                                        <button type="button" class="btn btn-danger slider__remove" >Удалить слайд</button>
                                                    </div>
                                                </div>
                                            @break
                                            
                                            <!-- differences -->
                                            @case("differences")
                                                <div class="form-group row">
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                <div class="col-12 mb-2">
                                                    <div class="border p-3">
                                                        Описание<textarea rows="3" maxlength="215" name="options[{{$order}}][{{$name}}][text]" class="form-control" >{{$option['text']}}</textarea>
                                                        Сноска<textarea rows="3" maxlength="215" name="options[{{$order}}][{{$name}}][footnote]" class="form-control" >{{$option['footnote']}}</textarea>
                                                    </div>
                                                </div>
                                                @foreach ($option['value'] as $name_dif => $dif)
                                                    <div class="col-4">
                                                        <div class="border p-3">
                                                            <div class="col-12 mb-2">Блок {{$name_dif}}</div>
                                                            Иконка<input type="text" value="{{$dif['logo']}}" name="options[{{$order}}][{{$name}}][value][{{$name_dif}}][logo]" class="form-control" id="feature_image{{$name}}{{$name_dif}}" readonly >
                                                            <a href="" class="popup_selector" data-inputid="feature_image{{$name}}{{$name_dif}}">Выбрать иконку</a><br>
                                                            Заголовок<input type="text" value="{{$dif['title']}}" name="options[{{$order}}][{{$name}}][value][{{$name_dif}}][title]" class="form-control" >
                                                            Текст<textarea rows="4" maxlength="215" name="options[{{$order}}][{{$name}}][value][{{$name_dif}}][text]" class="form-control" >{{$dif['text']}}</textarea>
                                                        </div>
                                                        <br>
                                                    </div>
                                                @endforeach
                                                </div>
                                            @break
                                            
                                            <!-- stages -->
                                            @case("stages")
                                                <div class="form-group row">
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                <div class="col-12 mb-2"></div>
                                                @foreach ($option['value'] as $name_prop => $prop)
                                                    <div class="col-4">
                                                        <div class="border p-3">
                                                            <div class="col-12 mb-2">Блок {{$name_prop}}</div>
                                                            Заголовок<input type="text" value="{{$prop['title']}}" name="options[{{$order}}][{{$name}}][value][{{$name_prop}}][title]" class="form-control" >
                                                            Текст<textarea name="options[{{$order}}][{{$name}}][value][{{$name_prop}}][text]" class="form-control" >{{$prop['text']}}</textarea>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            @break

                                            <!-- advantages -->
                                            @case("advantages")
                                                <div class="form-group row">
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="mb-3 col-12">
                                                        @if (!$option['title']['hide']) Общий заголовок @endif
                                                        <input type="text" value="{{$option['title']['value']}}" name="options[{{$order}}][{{$name}}][title][value]" placeholder="Введите заголовок" class="form-control mb-2" @if ($option['title']['hide'])
                                                            readonly style="display: none"
                                                        @endif >
                                                        <input type="text" value="{{$option['title']['hide']}}" name="options[{{$order}}][{{$name}}][title][hide]" class="form-control" placeholder="" required readonly style="display: none">
                                                    </div>
                                                    @foreach ($option['value'] as $order_option => $item)
                                                        <div class="slider-item mb-3 col-3">
                                                            <div class="border p-3">
                                                                Заголовок характеристики<input type="text" value="{{$item['title']}}" name="options[{{$order}}][{{$name}}][value][{{$order_option}}][title]" class="form-control mb-2" >
                                                                Краткий текст<textarea rows="3" maxlength="{{$item['maxlength']}}" name="options[{{$order}}][{{$name}}][value][{{$order_option}}][text]" class="form-control" >{{$item['text']}}</textarea>
                                                                <input type="text" value="{{$item['maxlength']}}" name="options[{{$order}}][{{$name}}][value][{{$order_option}}][maxlength]" class="form-control" placeholder="" required readonly style="display: none">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @break

                                            <!-- slider -->
                                            @case("slider")
                                                <div class="form-group slider row mb-4">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    @foreach ($option['value'] as $name_slider => $slider)
                                                        @if (($slider['img'] == "")||($slider['img'] == null))
                                                            <div class="slider-item hide mb-3 col-3" id="slider{{$name_slider}}">
                                                                <div class="border p-3">
                                                                    Картинка
                                                                    <input type="text" value="" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][img]" class="form-control" id="feature_image{{$name}}{{$name_slider}}" readonly >
                                                                    <a href="" class="popup_selector" data-inputid="feature_image{{$name}}{{$name_slider}}">Выбрать изображение</a>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="slider-item show mb-3 col-3" id="slider{{$name_slider}}">
                                                                <div class="border p-3">
                                                                    Картинка
                                                                    <input type="text" value="{{$slider['img']}}" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][img]" class="form-control" id="feature_image{{$name_slider}}" readonly >
                                                                    <a href="" class="popup_selector" data-inputid="feature_image{{$name_slider}}">Выбрать изображение</a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <br>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-info slider__add">Добавить слайд</button>
                                                        <button type="button" class="btn btn-danger slider__remove" >Удалить слайд</button>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- gallery-list -->
                                            @case("gallery-list")
                                                <div class="form-group row">
                                                    <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                                                        <div class="form-check mb-2 ml-3 hide-check">
                                                            <input class="form-check-input" type="checkbox" id="galleryHide" name="options[{{$order}}][{{$name}}][hide]}}]"
                                                            @if (isset($option['hide']))
                                                                checked
                                                            @endif
                                                            />
                                                            <label class="form-check-label text-uppercase" for="galleryHide">Скрыть блок</label>
                                                        </div>
                                                        <div class="check-subgroup border p-3">
                                                            @foreach ($galleries as $gallery)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gallery{{$gallery['id']}}" name="options[{{$order}}][{{$name}}][value][{{$gallery['id']}}]"
                                                                        @if (isset($option['value'][$gallery['id']]))
                                                                            checked
                                                                        @endif
                                                                        />
                                                                        <label class="form-check-label" for="gallery{{$gallery['id']}}">{{ $gallery['title'] }}</label>
                                                                    </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break
                                            
                                            <!-- question-list -->
                                            @case("question-list")
                                                <div class="form-group row">
                                                    <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                                                        <div class="form-check mb-2 ml-3 hide-check">
                                                            <input class="form-check-input" type="checkbox" id="questionHide" name="options[{{$order}}][{{$name}}][hide]}}]"
                                                            @if (isset($option['hide']))
                                                                checked
                                                            @endif
                                                            />
                                                            <label class="form-check-label text-uppercase" for="questionHide">Скрыть блок</label>
                                                        </div>
                                                        <div class="border p-3 check-subgroup">
                                                            @foreach ($questions as $question)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="question{{$question['id']}}" name="options[{{$order}}][{{$name}}][value][{{$question['id']}}]"
                                                                        @if (isset($option['value'][$question['id']]))
                                                                            checked
                                                                        @endif
                                                                        />
                                                                        <label class="form-check-label" for="question{{$question['id']}}">{{ $question['title'] }}</label>
                                                                    </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- big-banner -->
                                            @case("big-banner")
                                                <div class="form-group row">
                                                    <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="col-12 p-3" style="max-height: auto; overflow-y: auto;">
                                                        <div class="mb-2 row">
                                                            <div class="mb-3 col-12">
                                                                Фон <input type="text" value="{{$option['bg']}}" name="options[{{$order}}][{{$name}}][bg]" class="form-control" id="feature_image{{$name}}" readonly >
                                                                <a href="" class="popup_selector" data-inputid="feature_image{{$name}}">Выбрать изображение</a>
                                                            </div>
                                                            @foreach ($option['value'] as $item_order => $item)
                                                                <div class="mb-3 col-3">
                                                                    <div class="border p-3">
                                                                        <p>Блок {{$item_order}}</p>
                                                                        Заголовок <input type="text" value="{{$option['value'][$item_order]['title']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][title]" class="form-control mb-1" required >
                                                                        Текст <textarea type="text" rows="5" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][text]" class="form-control mb-1" required >{{$option['value'][$item_order]['text']}}</textarea>
                                                                        @foreach ($item["slider"] as $order_slider => $slider)
                                                                            <div class="mb-1">
                                                                                Изображение {{$order_slider}}
                                                                                <input type="text" value="{{$option['value'][$item_order]['slider'][$order_slider]}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][slider][{{$order_slider}}]" class="form-control" id="feature_image{{$item_order}}_{{$order_slider}}" readonly >
                                                                                <a href="" class="popup_selector" data-inputid="feature_image{{$item_order}}_{{$order_slider}}">Выбрать изображение</a>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- info-block -->
                                            @case("info-block")
                                                <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                Заголовок<input type="text" value="{{$option['value']['title']}}" name="options[{{$order}}][{{$name}}][value][title]" class="form-control mb-3" placeholder="" required>
                                                Текст<textarea name="options[{{$order}}][{{$name}}][value][text]" class="editor mb-3">{{$option['value']['text']}}</textarea>
                                                Картинка<input type="text" value="{{$option['value']['img']}}" name="options[{{$order}}][{{$name}}][value][img]" class="form-control" id="info-block-img{{$order}}" readonly >
                                                <a href="" class="popup_selector" data-inputid="info-block-img{{$order}}">Выбрать изображение</a>
                                            @break

                                            <!-- brand-list -->
                                            @case("brand-list")
                                                <div class="form-group row">
                                                    <input type="text" value="{{$option['cat']}}" name="options[{{$order}}][{{$name}}][cat]" class="form-control" placeholder="" required readonly style="display: none">
                                                    <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                                                        <div class="border p-3 check-subgroup">
                                                            @foreach ($brands as $brand)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="brand{{$brand['id']}}" name="options[{{$order}}][{{$name}}][value][{{$brand['id']}}]"
                                                                        @if (isset($option['value'][$brand['id']]))
                                                                            checked
                                                                        @endif
                                                                        />
                                                                        <label class="form-check-label" for="brand{{$brand['id']}}">{{ $brand['name'] }}</label>
                                                                    </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- post-list -->
                                            @case("post-list")
                                                <div class="form-group row">
                                                    <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                                                        <div class="form-check mb-2 ml-3 hide-check">
                                                            <input class="form-check-input" type="checkbox" id="postHide" name="options[{{$order}}][{{$name}}][hide]}}]"
                                                            @if (isset($option['hide']))
                                                                checked
                                                            @endif
                                                            />
                                                            <label class="form-check-label text-uppercase" for="postHide">Скрыть блок</label>
                                                        </div>
                                                        <div class="border p-3 check-subgroup">
                                                            @foreach ($posts as $post)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="post{{$post['id']}}" name="options[{{$order}}][{{$name}}][value][{{$post['id']}}]"
                                                                        @if (isset($option['value'][$post['id']]))
                                                                            checked
                                                                        @endif
                                                                        />
                                                                        <label class="form-check-label" for="post{{$post['id']}}">{{ $post['title'] }}</label>
                                                                    </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- contact -->
                                            @case("contact")
                                                <div class="form-group">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="border p-3">
                                                        Текст<textarea name="options[{{$order}}][{{$name}}][value][main]" class="editor">{{$option['value']['main']}}</textarea><br>
                                                        Телефон<input type="text" value="{{$option['value']['tel']}}" name="options[{{$order}}][{{$name}}][value][tel]" class="form-control" >
                                                        Email<input type="text" value="{{$option['value']['email']}}" name="options[{{$order}}][{{$name}}][value][email]" class="form-control" id="block{{$order}}" >
                                                        Ссылка на карту<textarea class="col-12" row="3" name="options[{{$order}}][{{$name}}][value][map]" class="form-control">{{$option['value']['map']}}</textarea>
                                                    </div>
                                                </div>
                                            @break
                                            
                                            <!-- video -->
                                            @case("video")
                                                <div class="form-group">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="border p-3">
                                                        Заголовок<input type="text" value="{{$option['value']['title']}}" name="options[{{$order}}][{{$name}}][value][title]" class="form-control" >
                                                        Ссылка на видео<textarea row="2" name="options[{{$order}}][{{$name}}][value][link]" class="form-control">{{$option['value']['link']}}</textarea>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- block_img_but -->
                                            @case("block_img_but")
                                                <div class="form-group">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="border p-3">
                                                        Первая часть текста<textarea name="options[{{$order}}][{{$name}}][value][text1]" class="editor">{{$option['value']['text1']}}</textarea>
                                                        <div class="form-group mt-3 mb-3">
                                                            Картинка 1<input type="text" value="{{$option['value']['img1']}}" name="options[{{$order}}][{{$name}}][value][img1]" class="form-control" id="feature_image_img1" value="" readonly >
                                                            <a href="" class="popup_selector" data-inputid="feature_image_img1">Выбрать изображение</a><br>
                                                            Картинка 2<input type="text" value="{{$option['value']['img2']}}" name="options[{{$order}}][{{$name}}][value][img2]" class="form-control" id="feature_image_img2" value="" readonly >
                                                            <a href="" class="popup_selector" data-inputid="feature_image_img2">Выбрать изображение</a><br>
                                                            Описание под картинками<input type="text" value="{{$option['value']['img_des']}}" name="options[{{$order}}][{{$name}}][value][img_des]" class="form-control" >
                                                        </div>
                                                        Вторая часть текста<textarea name="options[{{$order}}][{{$name}}][value][text2]" class="editor">{{$option['value']['text2']}}</textarea>
                                                        Текст кнопки<input type="text" value="{{$option['value']['btn_text']}}" name="options[{{$order}}][{{$name}}][value][btn_text]" class="form-control" >
                                                        Ссылка кнопки<input type="text" value="{{$option['value']['btn_link']}}" name="options[{{$order}}][{{$name}}][value][btn_link]" class="form-control" >
                                                    </div>
                                                </div>
                                            @break

                                            <!-- items -->
                                            @case("items")
                                                <div class="form-group">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="border p-3 row">
                                                        @foreach ($option['value'] as $item_order => $item)
                                                        <div class="form-group col-4">
                                                            Картинка - {{$item_order}}<input type="text" value="{{$option['value'][$item_order]['img']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][img]" class="form-control" id="feature_image_{{$name}}_{{$item_order}}" value="" readonly >
                                                            <a href="" class="popup_selector" data-inputid="feature_image_{{$name}}_{{$item_order}}">Выбрать изображение</a><br>
                                                            Текст - {{$item_order}}<input type="text" value="{{$option['value'][$item_order]['text']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][text]" class="form-control" >
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @break

                                            <!-- materials -->
                                            @case("materials")
                                                <div class="form-group">
                                                    <div class="card card-secondary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">{{$option['display']}}</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            @foreach ($option['value'] as $item_order => $item)
                                                                <h5 class="">Блок {{$item_order}}</h5>
                                                                Заголовок <input type="text" value="{{$option['value'][$item_order]['title']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][title]" class="form-control" >
                                                                Текст <textarea name="options[{{$order}}][{{$name}}][value][{{$item_order}}][text]" class="editor">{{$option['value'][$item_order]['text']}}</textarea>

                                                                <div class="row mt-2">
                                                                    <div class="col-12">Особенности</div>
                                                                    @foreach ($option['value'][$item_order]['spec'] as $order_spec => $spec)
                                                                        <div class="col-6 mb-2">
                                                                            <input type="text" value="{{$spec}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][spec][{{$order_spec}}]" class="form-control" >
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                
                                                                Толщина <input type="text" value="{{$option['value'][$item_order]['thick']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][thick]" class="form-control" >
                                                                Реальный срок службы <input type="text" value="{{$option['value'][$item_order]['lifetime']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][lifetime]" class="form-control" >
                                                                
                                                                <div class="form-group row p-2">
                                                                    @foreach ($option['value'][$item_order]['palette'] as $num_palette => $palette)
                                                                        <div class="form-group col-3 p-3">
                                                                            Цветовая гамма <input type="text" value="{{$palette['title']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][palette][{{$num_palette}}][title]" class="form-control form-control-sm" >
                                                                            @foreach ($palette['imgs'] as $num_img => $img)
                                                                                Пример {{$num_img}}<input type="text" value="{{$img}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][palette][{{$num_palette}}][imgs][{{$num_img}}]" class="form-control form-control-sm" id="image_{{$order}}_{{$name}}_{{$item_order}}_{{$num_palette}}_{{$num_img}}" value="" readonly >
                                                                                <a href="" class="popup_selector" data-inputid="image_{{$order}}_{{$name}}_{{$item_order}}_{{$num_palette}}_{{$num_img}}">Выбрать изображение</a><br>
                                                                            @endforeach
                                                                        </div>
                                                                    @endforeach
                                                                </div>

                                                                <div class="form-group row">
                                                                    <div class="col-12 mb-2 font-weight-bold">Слайдер</div>
                                                                    @foreach ($item['slider'] as $name_slider => $slider)
                                                                            <div class="slider-item mb-2 col-2" id="slider{{$name_slider}}">
                                                                                <div class="border p-3">
                                                                                    Изображение
                                                                                    <input type="text" value="{{$slider['img']}}" name="options[{{$order}}][{{$name}}][value][{{$item_order}}][slider][{{$name_slider}}][img]" class="form-control form-control-sm" id="image_{{$order}}_{{$name}}_{{$item_order}}_{{$name_slider}}" readonly >
                                                                                    <a href="" class="popup_selector" data-inputid="image_{{$order}}_{{$name}}_{{$item_order}}_{{$name_slider}}">Выбрать изображение</a>
                                                                                </div>
                                                                            </div>
                                                                    @endforeach
                                                                </div>

                                                                @if ($item_order != count($option['value']))
                                                                    <br><hr><br>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            <!-- many_pic -->
                                            @case("many_pic")
                                                <div class="form-group">
                                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                                    <div class="border p-3 row">
                                                        <div class="col-12 mb-3">
                                                            Заголовок <input type="text" value="{{$option['value']['title']}}" name="options[{{$order}}][{{$name}}][value][title]" class="form-control" >
                                                            Текст <textarea name="options[{{$order}}][{{$name}}][value][text]" class="editor">{{$option['value']['text']}}</textarea>
                                                        </div>
                                                        @foreach ($option['value']['imgs'] as $item_order => $item)
                                                            <div class="form-group col-2">
                                                                Картинка - {{$item_order}}<input type="text" value="{{$item}}" name="options[{{$order}}][{{$name}}][value][imgs][{{$item_order}}]" class="form-control form-control-sm" id="feature_image_{{$name}}_{{$item_order}}" value="" readonly >
                                                                <a href="" class="popup_selector" data-inputid="feature_image_{{$name}}_{{$item_order}}">Выбрать изображение</a><br>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @break

                                            @default
                                                
                                        @endswitch
                                    </div>
                                @endforeach    
                            @endforeach
                        </div>
                        
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      
@endsection

@section('script')
    <script>
        $(".hide-check input:checked").parent().parent().children('.check-subgroup').addClass('inactive');

         $( ".hide-check input" ).on("click", function() {
            let inactive = $(this).parent().parent().children('.check-subgroup');
            if ($(this).is( ":checked" )) {
                inactive.addClass('inactive');
            } else inactive.removeClass('inactive');

        });
    </script>
@endsection