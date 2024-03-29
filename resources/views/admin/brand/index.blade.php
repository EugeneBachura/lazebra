@extends('layouts.admin_layout')

@section('title', 'Все марки')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Марки</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 d-flex flex-row-reverse">
              <a href="{{ route('brand.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus-circle"></i>
                Добавить марку
              </a>
            </div>
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
                              <th style="width: 20%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($brands as $brand)
                            <tr>
                                <td>
                                    {{ $brand['id'] }}
                                </td>
                                <td>
                                    {{ $brand['name'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('brand.edit', $brand['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить
                                    </a>
                                    <form action="{{ route('brand.destroy',$brand['id']) }}" method="POST" style="display: inline-block">
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
                          
                      </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection