@extends('layouts.admin_layout')

@section('title', 'Модели машин')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Модели машин</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 d-flex flex-row-reverse">
              <a href="{{ route('carmodel.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus-circle"></i>
                Добавить модель
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
                                Название модели
                              </th>
                              <th>
                                Марка
                              </th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($carmodels as $carmodel)
                            <tr>
                                <td>
                                    {{ $carmodel['id'] }}
                                </td>
                                <td>
                                    {{ $carmodel['name'] }}
                                </td>
                                <td>
                                    {{ DB::table('brands')->where('id', $carmodel['brand_id'])->value('name') }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('carmodel.edit', $carmodel) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить
                                    </a>
                                    <form action="{{ route('carmodel.destroy', $carmodel['id']) }}" method="POST" style="display: inline-block">
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