@extends('layouts.admin_layout')

@section('title', 'Редактирование меню подвала')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактирование меню подвала: {{ $footerMenu['name'] }}</h1>
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
                        <form action="{{ route('footer_menu.update',$footerMenu['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                          <div class="card-body">
                              <div class="form-group">
                                  Имя столбца<input type="text" maxlength="250" value="{{$footerMenu['name']}}" name="name" class="form-control" placeholder="Введите отображаемое название столбца" required>
                              </div>
                              <div class="form-group row">
                                
                                  @foreach ($footerMenu['items'] as $order => $item)
                                  <div class="col-4 p-3">
                                    <div class="mb-2"> Пункт {{$order}}</div>
                                    <div class="mb-2">
                                      <input type="text" value="{{$item['title']}}" name="items[{{$order}}][title]" class="form-control" placeholder="Введите отображаемое название пункта">
                                    </div>
                                    <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">{{url('/')}}/</span>
                                      </div>
                                      <input type="text" value="{{$item['link']}}" name="items[{{$order}}][link]" class="form-control" placeholder="Введите url страницы на сайте">
                                    </div>
                                  </div>
                                  @endforeach
                                
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