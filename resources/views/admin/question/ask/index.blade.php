@extends('layouts.admin_layout')

@section('title', 'Заданные вопросы')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Заданные вопросы</h1>
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
                                
                              </th>
                              <th style="width: 5%">
                                ID
                              </th>
                              <th>
                                email отправителя
                              </th>
                              <th>
                                Дата добавления
                              </th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($asks as $ask)
                            <tr>
                                <td>
                                    @if (!$ask['read'])
                                        <i class="fas fa-circle" style="color:#5cb95c"></i>
                                    @else
                                        <i class="far fa-circle"></i>
                                    @endif
                                </td>
                                <td>
                                    {{ $ask['id'] }}
                                </td>
                                <td>
                                    {{ $ask['email'] }}
                                </td>
                                <td>
                                    {{ $ask['created_at'] }}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('ask.show', $ask['id']) }}">
                                        <i class="fas fa-book-reader"></i>
                                        Прочитать
                                    </a>
                                    <form action="{{ route('ask.destroy', $ask['id']) }}" method="POST" style="display: inline-block">
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