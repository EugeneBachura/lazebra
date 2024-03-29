@extends('layouts.admin_layout')

@section('title', 'Редактировать правовую страницу')

@section('style')
<style>
    .check-group .inactive {
        opacity: 0.5;
        position: relative;
    }
    .check-group .inactive::after {
        content: "";
        background-color: rgba(0, 0, 0, 0.089);
        height: 100%;
        width: 100%;
        position: absolute;
        top:0;
        left: 0;
    }
</style>@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать правовую страницу: {{ $page['title'] }}</h1>
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
                        <form action="{{ route('law.update', $page['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="url">URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">{{$par_url}}</span>
                                    </div>
                                    <input type="text" value="{{ $page['URL'] }}" name="url" class="form-control" placeholder="Введите url-адрес" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url">Title</label>
                                <input type="text" maxlength="250" value="{{ $page['title'] }}" name="title" class="form-control" placeholder="Введите Title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" maxlength="250" value="{{ $page['description'] }}" name="description" class="form-control" placeholder="Введите description" required>
                            </div>
                            <div class="form-group">
                                <label for="h1">Заголовок h1</label>
                                <input type="text" maxlength="250" value="{{ $page['h1'] }}" name="h1" class="form-control" placeholder="Введите заголовок" required>
                            </div>

                            @if (isset($options['subtitle'])) 
                                <div class="form-group">
                                    <label for="subtitle">Подзаголовок</label>
                                    <input type="text" value="{{ $options['subtitle'] }}" name="options[subtitle]" class="form-control" placeholder="Введите подзаголовок" required>
                                </div>
                            @endif
                            @if (isset($options['requisites']))
                                <div class="form-group">
                                    <div class="col-12 mb-2 font-weight-bold">Реквизиты</div>
                                    <div class="border p-3 row">
                                        @foreach ($options['requisites'] as $order_item => $item)
                                        <input type="text" value="{{$item["title"]}}" name="options[requisites][{{$order_item}}][title]" class="form-control" placeholder="" required readonly style="display: none">
                                        <div class="input-group mb-3 col-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{$item["title"]}}</span>
                                            </div>
                                            <input type="text" value="{{$item["text"]}}" name="options[requisites][{{$order_item}}][text]" class="form-control" >
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                            @if (isset($options['editor']))
                                <div class="form-group">
                                    <label>Контент</label>
                                    <textarea name="options[editor]" class="editor">{{$options['editor']}}</textarea>
                                </div>
                            @endif
                            
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

@section('script')
    <script>
        $(".hide-check input:checked").parent().parent().children('.check-subgroup').addClass('inactive');

         $( ".hide-check input" ).on("click", function() {
            let inactive = $(this).parent().parent().children('.check-subgroup');
            if ($(this).is( ":checked" )) {
                inactive.addClass('inactive');
            } else inactive.removeClass('inactive');

        });
    </script>
@endsection