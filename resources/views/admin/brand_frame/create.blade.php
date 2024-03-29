@extends('layouts.admin_layout')

@section('title', 'Добавить марку')

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
              <h1 class="m-0">Добавить марку</h1>
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
                        <form action="{{ route('brandsframe.store') }}" method="POST">
                        @csrf
                          <div class="card-body">
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" placeholder="Введите ссылку" required>
                            </div>
                            <div class="form-group">
                              <label>Title</label>
                              <input type="text" maxlength="250" name="title" class="form-control" placeholder="Введите title марки" required>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <input type="text" maxlength="250" name="description" class="form-control" placeholder="Введите description марки" required>
                            </div>
                            <div class="form-group">
                                <label>Заголовое h1</label>
                                <input type="text" maxlength="250" name="h1" class="form-control" placeholder="Введите h1 марки" required>
                            </div>
                            <div class="form-group">
                                <label for="InputSubtitle">Текст под заголовком</label>
                                <input id="InputSubtitle" maxlength="250" class="form-control" type="text" name="subtitle" placeholder="Введите загаловок текст под заголовком" required>
                            </div>
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" maxlength="250" name="name" class="form-control" placeholder="Введите название марки" required>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <img src="" alt="" class="img-uploaded" style="display: block; max-height: 250px; width: auto; margin: 10px">
                                <input type="text" name="img" class="form-control" id="feature_image" value="" readonly >
                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                            </div>

                            <!-- number -->
                            <div class="form-group">
                                <div class="col-12 mb-2 font-weight-bold">Цена</div>
                                    <input type="text" value="Цена" name="options[1][price][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                    <input type="text" value="number" name="options[1][price][type]" class="form-control" placeholder="" required readonly style="display: none">
                                    <input type="number" value="" name="options[1][price][value]" class="form-control" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label>Галерея</label>
                                <select name="gallery_id" class="form-control" required>
                                    @foreach ($galleries as $gallery)
                                        <option value="{{ $gallery['id'] }}">{{ $gallery['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- editor -->
                            <div class="form-group">
                              <label>Контент</label>
                              <input type="text" value="Контент" name="options[3][editor][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                              <input type="text" value="editor" name="options[3][editor][type]" class="form-control" placeholder="" required readonly style="display: none">
                              <textarea name="options[3][editor][value]" class="editor"></textarea>
                            </div>
                            
                            <!-- question-list -->
                            <div class="form-group row">
                                <div class="col-12 font-weight-bold">Отображаемые вопросы</div>
                                <input type="text" value="Отображаемые вопросы" name="options[4][question-list][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                                <input type="text" value="question-list" name="options[4][question-list][type]" class="form-control" placeholder="" required readonly style="display: none">
                                <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                                    <div class="form-check mb-2 ml-3 hide-check">
                                        <input class="form-check-input" type="checkbox" id="questionHide" name="options[4][question-list][hide]}}]"/>
                                        <label class="form-check-label text-uppercase" for="questionHide">Скрыть блок</label>
                                    </div>
                                    <div class="border p-3 check-subgroup">
                                        @foreach ($questions as $question)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="question{{$question['id']}}" name="options[4][question-list][value][{{$question['id']}}]"/>
                                                    <label class="form-check-label" for="question{{$question['id']}}">{{ $question['title'] }}</label>
                                                </div>
                                        @endforeach
                                    </div>
                              </div>
                            </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
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

@section('script')
    <script>
        let hrefLink = "";
        $('nav a').on('click', function(e){
            if ($(this).attr('href').indexOf("http") !== -1) {
            if ( $('.content-wrapper input').length > 0 ) {
                $('#href-win').removeClass("hide");
                hrefLink = $(this).attr('href');
                e.preventDefault();
            };
            };
        });
        $('#href-win-link').on('click', function(){
        $(location).attr('href',hrefLink);
        });
        $('#href-win-close').on('click', function(){
        $('#href-win').addClass("hide");
        });
    </script>
@endsection