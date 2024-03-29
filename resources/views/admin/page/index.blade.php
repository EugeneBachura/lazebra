@extends('layouts.admin_layout')

@section('title', 'Все страницы')

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
                          @foreach ($pages as $page)
                            <tr>
                                <td>
                                    {{ $page['id'] }}
                                </td>
                                <td>
                                    {{ $page['title'] }}
                                </td>
                                <td>
                                    {{ $page['updated_at'] }}
                                </td>
                                <td>
                                    @if ($page['url'] != "")
                                      <a href="{{url($page['url'])}}/" target="_blank">{{url('')}}/{{ $page['url'] }}/</a>
                                    @else
                                      <a href="{{url('/')}}" target="_blank">{{url('/')}}</a>
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('page.edit', $page['id']) }}">
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