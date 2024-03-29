@extends('layouts.admin_layout')

@section('title', 'Изменить галерею')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Изменить галерею: {{ $gallery['title'] }}</h1>
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
                        <form action="{{ route('gallery.update',$gallery['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                URL<input type="text" value="{{$gallery['URL']}}" name="URL" class="form-control" placeholder="Введите url-адрес" required>
                            </div>
                            <div class="form-group">
                                Title<input type="text" maxlength="250" value="{{$gallery['title']}}" name="title" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Description<input type="text" maxlength="250" value="{{$gallery['description']}}" name="description" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Название<input type="text" maxlength="250" value="{{$gallery['title']}}" name="title" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Превью<input type="text" value="{{$gallery['preview']}}" name="preview" class="form-control" id="feature_preview" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_preview">Выбрать изображение</a>
                            </div>
                            <div class="form-group gallery row">
                                @foreach ($gallery['options']['value'] as $order => $item)
                                    @if (($item != null)||($item != ''))
                                        <div class="gallery-item show mb-3 col-6">
                                            <div class="border p-3">
                                                Изображение - {{$order}}
                                                <input type="text" value="{{$item}}" name="options[value][{{$order}}]" class="form-control" id="feature_image{{$order}}" readonly >
                                                <a href="" class="popup_selector" data-inputid="feature_image{{$order}}">Выбрать изображение</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="gallery-item hide mb-3 col-6" id="gallery{{$order}}">
                                            <div class="border p-3">
                                                Изображение - {{$order}}
                                                <input type="text" value="{{$item}}" name="options[value][{{$order}}]" class="form-control" id="feature_image{{$order}}" readonly >
                                                <a href="" class="popup_selector" data-inputid="feature_image{{$order}}">Выбрать изображение</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <br>
                                <div class="col-12">
                                    <button type="button" class="btn btn-info gallery__add">Добавить изображение</button>
                                    <button type="button" class="btn btn-danger gallery__remove">Удалить изображение</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      
@endsection