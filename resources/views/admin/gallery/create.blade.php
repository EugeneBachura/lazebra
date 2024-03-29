@extends('layouts.admin_layout')

@section('title', 'Добавить галерею')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить галерею</h1>
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
                        <form action="{{ route('gallery.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                URL<input type="text" value="" name="URL" class="form-control" placeholder="Введите url-адрес" required>
                            </div>
                            <div class="form-group">
                                Title<input type="text" maxlength="250" value="" name="title" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Description<input type="text" maxlength="250" value="" name="description" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Название<input type="text" maxlength="250" value="" name="name" class="form-control" placeholder="Введите название галереи" required>
                            </div>
                            <div class="form-group">
                                Превью<input type="text" value="" name="preview" class="form-control" id="feature_preview" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_preview">Выбрать изображение</a>
                            </div>
                            <div class="form-group gallery row">
                                <div class="gallery-item show mb-3 col-6" id="gallery1">
                                    <div class="border p-3">
                                        Изображение - 1
                                        <input type="text" value="" name="options[value][1]" class="form-control" id="feature_image1" readonly >
                                        <a href="" class="popup_selector" data-inputid="feature_image1">Выбрать изображение</a>
                                    </div>
                                </div>
                                @for ($order = 2; $order < 21; $order++)
                                    <div class="gallery-item hide mb-3 col-6" id="gallery{{$order}}">
                                        <div class="border p-3">
                                            Изображение - {{$order}}
                                            <input type="text" value="" name="options[value][{{$order}}]" class="form-control" id="feature_image{{$order}}" readonly >
                                            <a href="" class="popup_selector" data-inputid="feature_image{{$order}}">Выбрать изображение</a>
                                        </div>
                                    </div>
                                @endfor
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

@section('script')
    <script>
        let hrefLink = "";
        $('nav a').on('click', function(e){
            if ($(this).attr('href').indexOf("http") !== -1) {
            if ( $('.content-wrapper input').length > 0 ) {
                $('#href-win').removeClass("hide");
                hrefLink = $(this).attr('href');
                e.preventDefault();
            };
            };
        });
        $('#href-win-link').on('click', function(){
        $(location).attr('href',hrefLink);
        });
        $('#href-win-close').on('click', function(){
        $('#href-win').addClass("hide");
        });
    </script>
@endsection