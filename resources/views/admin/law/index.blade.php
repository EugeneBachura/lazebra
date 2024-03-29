@extends('layouts.admin_layout')

@section('title', 'Все правовые страницы')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Страницы</h1>
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
                                Страница
                              </th>
                              <th style="width: 15%">
                                Дата изменения
                              </th>
                              <th>
                                URL
                              </th>
                              <th style="width: 20%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($laws as $law)
                            <tr>
                                <td>
                                    {{ $law['id'] }}
                                </td>
                                <td>
                                    {{ $law['h1'] }}
                                </td>
                                <td>
                                    {{ $law['updated_at'] }}
                                </td>
                                <td>
                                    {{ $law['URL'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('law.edit', $law['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Изменить
                                    </a>
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