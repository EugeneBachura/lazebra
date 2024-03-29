@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить статью</h1>
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
                        <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-12">URL</label>
                                <input type="text" name="url" class="col-12" required>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" maxlength="250" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" maxlength="250" name="description" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Заголовок H1</label>
                                <input type="text" maxlength="250" name="h1" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="cat_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Текст превью</label>
                                <textarea name="prew_text" class="col-6" maxlength="175" row="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Контент</label>
                                <textarea name="text" class="editor col-6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Картинка</label>
                                <img src="" alt="" class="img-uploaded" style="display: block; max-height: 250px; width: auto; margin: 10px">
                                <input type="text" name="img" class="form-control" id="feature_image" value="" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
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