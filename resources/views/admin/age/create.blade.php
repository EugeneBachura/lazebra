@extends('layouts.admin_layout')

@section('title', 'Добавить поколение')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Добавить поколение</h1>
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
                        <form action="{{ route('age.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="url">URL</label>
                            <input id="url" maxlength="250" class="form-control" type="text" name="url" placeholder="Введите url" required>
                          </div>
                          <div class="form-group">
                            <label for="InputTitle">Title</label>
                            <input id="InputTitle" maxlength="250" class="form-control" type="text" name="title" placeholder="Введите title" required>
                          </div>
                          <div class="form-group">
                            <label for="InputDescription">Description</label>
                            <input id="InputDescription" maxlength="250" class="form-control" type="text" name="description" placeholder="Введите Description" required>
                          </div>
                          <div class="form-group">
                            <label for="InputH1">H1</label>
                            <input id="InputH1" maxlength="250" class="form-control" type="text" name="h1" placeholder="Введите загаловок H1" required>
                          </div>
                          <div class="form-group">
                            <label for="InputSubtitle">Текст под заголовком</label>
                            <input id="InputSubtitle" maxlength="250" class="form-control" type="text" name="subtitle" placeholder="Введите загаловок текст под заголовком" required>
                          </div>
                          <div class="form-group">
                            <label for="InputName">Название поколения</label>
                            <input type="text" maxlength="250" name="name" id="InputName" class="form-control" placeholder="Введите отображаемое название поколения" required>
                          </div>
                          <div class="form-group">
                            <label>Модель</label>
                            <select name="model_id" class="form-control" required>
                                @foreach ($car_models as $car_model)
                                    <option value="{{ $car_model['id'] }}">{{ DB::table('brands')->where('id', DB::table('car_models')->where('id', $car_model['id'])->value('brand_id') )->value('name') }} {{ $car_model['name'] }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="feature_image">Картинка</label>
                            <img src="" alt="" class="img-uploaded" style="display: block; max-height: 250px; width: auto; margin: 10px">
                            <input type="text" name="img" class="form-control" id="feature_image" value="" readonly required>
                            <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                          </div>

                        <!-- parameter 1-->
                        <div class="form-group">
                          <label>Комплектность (часть 1)</label>
                          <input type="text" value="Комплектность (часть 1)" name="options[1][parameter1][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="editor" name="options[1][parameter1][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <textarea name="options[1][parameter1][value]" class="editor"></textarea>
                        </div>
                        <!-- parameter 2-->
                        <div class="form-group">
                          <label>Комплектность (часть 2)</label>
                          <input type="text" value="Комплектность (часть 2)" name="options[2][parameter2][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="editor" name="options[2][parameter2][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <textarea name="options[2][parameter2][value]" class="editor"></textarea>
                        </div>
                        <!-- parameter 3-->
                        <div class="form-group">
                          <label>Описание</label>
                          <input type="text" value="Описание" name="options[3][parameter3][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="editor" name="options[3][parameter3][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <textarea name="options[3][parameter3][value]" class="editor"></textarea>
                        </div>
                        <!-- parameter 4-->
                        <div class="form-group">
                          <label>Тип креплений</label>
                          <input type="text" value="Тип креплений" name="options[4][parameter4][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="editor" name="options[4][parameter4][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <textarea name="options[4][parameter4][value]" class="editor"></textarea>
                        </div>
                        <!-- parameter 5-->
                        <div class="form-group">
                          <label>Контент</label>
                          <input type="text" value="Контент" name="options[5][parameter5][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="editor" name="options[5][parameter5][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <textarea name="options[5][parameter5][value]" class="editor"></textarea>
                        </div>
                        <!-- question-list -->
                        <div class="form-group row">
                          <div class="col-12 font-weight-bold">Отображаемые вопросы</div>
                          <input type="text" value="Отображаемые вопросы" name="options[6][question-list][display]" class="form-control" placeholder="" required readonly style="display: none"/>
                          <input type="text" value="question-list" name="options[6][question-list][type]" class="form-control" placeholder="" required readonly style="display: none">
                          <div class="col-4 p-3 check-group" style="max-height: 200px; overflow-y: auto;">
                              <div class="form-check mb-2 ml-3 hide-check">
                                  <input class="form-check-input" type="checkbox" id="questionHide" name="options[6][question-list][hide]}}]"/>
                                  <label class="form-check-label text-uppercase" for="questionHide">Скрыть блок</label>
                              </div>
                              <div class="border p-3 check-subgroup">
                                  @foreach ($questions as $question)
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="question{{$question['id']}}" name="options[6][question-list][value][{{$question['id']}}]"/>
                                              <label class="form-check-label" for="question{{$question['id']}}">{{ $question['title'] }}</label>
                                          </div>
                                  @endforeach
                              </div>
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