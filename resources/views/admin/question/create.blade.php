@extends('layouts.admin_layout')

@section('title', 'Добавить вопрос')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить вопрос</h1>
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
                        <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                Заголовок<input type="text" value="" name="title" class="form-control" placeholder="Впишите вопрос" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст</label>
                                <textarea name="text" class="editor"></textarea>
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