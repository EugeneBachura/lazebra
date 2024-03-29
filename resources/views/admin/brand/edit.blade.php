@extends('layouts.admin_layout')

@section('title', 'Редактирование марки')

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
              <h1 class="m-0">Редактирование марки: {{ $brand['title'] }}</h1>
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
                        <form action="{{ route('brand.update',$brand['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" maxlength="250" value="{{ $brand['url'] }}" name="url" class="form-control" placeholder="Введите ссылку" required>
                            </div>
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" maxlength="250" value="{{ $brand['title'] }}" name="title" class="form-control" placeholder="Введите title марки" required>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <input type="text" maxlength="250" value="{{ $brand['description'] }}" name="description" class="form-control" placeholder="Введите description марки" required>
                            </div>
                            <div class="form-group">
                                <label>Заголовое h1</label>
                                <input type="text" maxlength="250" value="{{ $brand['h1'] }}" name="h1" class="form-control" placeholder="Введите h1 марки" required>
                            </div>
                            <div class="form-group">
                                <label for="InputSubtitle">Текст под заголовком</label>
                                <input id="InputSubtitle" maxlength="250" value="{{$brand['subtitle']}}" class="form-control" type="text" name="subtitle" placeholder="Введите загаловок текст под заголовком" required>
                            </div>
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" maxlength="250" value="{{ $brand['name'] }}" name="name" class="form-control" placeholder="Введите название марки" required>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <img src="/{{ $brand['img'] }}" alt="" class="img-uploaded" style="display: block; max-height: 250px; width: auto; margin: 10px">
                                <input type="text" value="{{ $brand['img'] }}" name="img" class="form-control" id="feature_image" value="" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                            </div>
                            {{--<div class="form-group">
                                <label>Ссылка на модельные чехлы</label>
                                <input type="text" value="{{ $brand['model_link'] }}" name="model_link" class="form-control" placeholder="Введите ссылку">
                            </div>
                            <div class="form-group">
                                <label>Ссылка на каркасные чехлы</label>
                                <input type="text" value="{{ $brand['frame_link'] }}" name="frame_link" class="form-control" placeholder="Введите ссылку">
                            </div>--}}

                            <div class="form-group">
                                <label>Галерея</label>
                                <select name="gallery_id" class="form-control" required>
                                    @foreach ($galleries as $gallery)
                                        <option value="{{ $gallery['id'] }}" 
                                        @if($gallery['id'] == $brand['gallery_id']) selected @endif >{{ $gallery['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                          @foreach ($options as $order => $item)
                            @foreach ($item as $name => $option)
                              @switch($option['type'])
                                
                                @case("question-list")<!-- question-list -->
                                  <div class="form-group row">
                                      <div class="col-12 font-weight-bold">{{$option['display']}}</div>
                                      <input type="text" value="{{$option['display']}}" name="options[{{$order}}][{{$name}}][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                      <input type="text" value="{{$option['type']}}" name="options[{{$order}}][{{$name}}][type]" class="form-control" placeholder="" required readonly style="display: none">
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

                                <!-- slider -->
                                {{--@case("slider")
                                  <div class="form-group slider row mb-4">
                                      <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                      <input type="text" value="{{$option['display']}}" name="options[{{$order}}][{{$name}}][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                      <input type="text" value="{{$option['type']}}" name="options[{{$order}}][{{$name}}][type]" class="form-control" placeholder="" required readonly style="display: none">
                                      @foreach ($option['value'] as $name_slider => $slider)
                                          @if (($slider['img'] == "")||($slider['img'] == null))
                                              <div class="slider-item hide mb-3 col-3" id="slider{{$name_slider}}">
                                                  <div class="border p-3">
                                                      Изображение {{$name_slider}}
                                                      <input type="text" value="" name="options[{{$order}}][{{$name}}][value][{{$name_slider}}][img]" class="form-control" id="feature_image{{$name}}{{$name_slider}}" readonly >
                                                      <a href="" class="popup_selector" data-inputid="feature_image{{$name}}{{$name_slider}}">Выбрать изображение</a>
                                                  </div>
                                              </div>
                                          @else
                                              <div class="slider-item show mb-3 col-3" id="slider{{$name_slider}}">
                                                  <div class="border p-3">
                                                      Изображение {{$name_slider}}
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
                                @break--}}

                                <!-- editor -->
                                @case("editor")
                                    <div class="form-group">
                                        <label>{{$option['display']}}</label>
                                        <input type="text" value="{{$option['display']}}" name="options[{{$order}}][{{$name}}][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                        <input type="text" value="{{$option['type']}}" name="options[{{$order}}][{{$name}}][type]" class="form-control" placeholder="" required readonly style="display: none">
                                        <textarea name="options[{{$order}}][{{$name}}][value]" class="editor">{{$option['value']}}</textarea>
                                    </div>
                                @break

                                <!-- number -->
                                @case("number")
                                    <div class="col-12 mb-2 font-weight-bold">{{$option['display']}}</div>
                                    <input type="text" value="{{$option['display']}}" name="options[{{$order}}][{{$name}}][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                    <input type="text" value="{{$option['type']}}" name="options[{{$order}}][{{$name}}][type]" class="form-control" placeholder="" required readonly style="display: none">
                                    <input type="{{$option['type']}}" value="{{$option['value']}}" name="options[{{$order}}][{{$name}}][value]" class="form-control" placeholder="" required>
                                @break

                                @default
                                                
                              @endswitch
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