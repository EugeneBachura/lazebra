@extends('layouts.admin_layout')

@section('title', 'Главное меню')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Главное меню</h1>
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

            <div class="card">
                <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 5%">
                                ID
                              </th>
                              <th>
                                Название
                              </th>
                              <th>
                                Ссылка
                              </th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($menu as $menu_item)
                            <tr>
                                <td>
                                    {{ $menu_item['id'] }}
                                </td>
                                <td>
                                    {{ $menu_item['name'] }}
                                </td>
                                <td>
                                  <a href="{{url($menu_item['link'])}}/" target="_blank">{{url('')}}/{{ $menu_item['link'] }}</a>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('menu.edit', $menu_item['id']) }}">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Изменить
                                    </a>
                                    <form action="{{ route('menu.destroy', $menu_item['id']) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr> 
                          @endforeach
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="project-actions text-right">
                                <a class="btn btn-success btn-sm" href="{{ route('menu.create', $menu_item['id']) }}">
                                  <i class="fas fa-plus-circle"></i>
                                  Добавить
                                </a>
                            </td>
                          </tr>
                      </tbody>
                  </table>
                </div>
                
                <!-- /.card-body -->
              </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection