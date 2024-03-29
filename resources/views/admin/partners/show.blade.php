@extends('layouts.admin_layout')

@section('title', 'Просмотр запроса')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Просмотр запроса</h1>
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
                    <div class="card card-primary card-outline">
                      <div class="mailbox-read-info">
                        <h5>Имя: {{$partner['name']}}</h5>
                        <h6>Телефон: {{$partner['tel']}}</h6>
                        <h6>Город: {{$partner['city']}}
                          <span class="mailbox-read-time float-right">Получено {{$partner['created_at']}}</span></h6>
                      </div>
                      <div class="mailbox-read-message">
                        {{$partner['text']}}
                      </div>
                      <div class="card-footer">
                        <a href="{{ route('partners.index') }}" type="submit" class="btn btn-primary">Назад</a>
                      </div>
                    </div>
                </div>
            </div> 
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection