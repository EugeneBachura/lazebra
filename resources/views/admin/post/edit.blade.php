@extends('layouts.admin_layout')

@section('title', 'Редактировать статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать статью: {{ $post['title'] }}</h1>
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
                        <form action="{{ route('post.update', $post['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            @if ( $post['url'] != "difference")
                                <div class="form-group">
                                    <label class="col-12" for="InputURL">URL</label>
                                    <input type="text" value="{{ $post['url'] }}" name="url" class="form-control" required id="InputURL">
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" maxlength="250" value="{{ $post['title'] }}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" maxlength="250" value="{{ $post['description'] }}" name="description" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Заголовок H1</label>
                                <input type="text" maxlength="250" value="{{ $post['h1'] }}" name="h1" class="form-control" id="exampleInputEmail1" placeholder="Введите загаловок статьи" required>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="cat_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}" 
                                        @if($category['id'] == $post['cat_id']) selected @endif >{{ $category['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-12">Текст превью</label>
                                <textarea class="form-control" name="prew_text" class="col-6" maxlength="175" row="3">{{ $post['prew_text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Контент</label>
                                <textarea name="text" class="editor">{{ $post['text'] }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="feature_image">Картинка</label>
                                <img src="/{{ $post['img'] }}" alt="" class="img-uploaded" style="display: block; max-height: 250px; width: auto; margin: 10px">
                                <input type="text" value="{{ $post['img'] }}" name="img" class="form-control" id="feature_image" value="" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                            </div>
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