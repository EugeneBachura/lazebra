@extends('layouts.admin_layout')

@section('title', 'Редактирование пункта меню')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактирование пункта меню: {{ $menu['name'] }}</h1>
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
                        <form action="{{ route('menu.update',$menu['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="card-body">
                              <div class="form-group">
                                  Название<input type="text" maxlength="250" value="{{$menu['name']}}" name="name" class="form-control" placeholder="Введите отображаемое название" required>
                              </div>
                              <div class="form-group">
                                Ссылка
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">{{url('/')}}/</span>
                                  </div>
                                  <input type="text" maxlength="250" value="{{$menu['link']}}" name="link" class="form-control" placeholder="Введите url страницы на сайте" required>
                                </div>
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