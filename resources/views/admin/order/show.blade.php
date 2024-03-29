@extends('layouts.admin_layout')

@section('title', 'Просмотр заказа')

@section('content')
<link rel="shortcut icon" href="{{ url('constructor-app/TemplateData/favicon.ico') }}">
<link rel="stylesheet" href="{{ url('constructor-app/TemplateData/style.css') }}">


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Просмотр заказа</h1>
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
        <div class="constructor__model">
          <div id="unityContainer" style="width: 100%; height: 100%"></div>
        </div><br>
        <form action="{{ route('order.update', $order['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="card card-primary card-outline">
                      <div class="mailbox-read-info">
                        <span class="mailbox-read-time float-right">Получено {{$order['created_at']}}</span>
                        <div class="form-group">
                          Статус:<select type="text" name="status" class="form-control" placeholder="">
                            <option value="Новый" @if ($order['status'] == "Новый")
                              selected
                            @endif>Новый</option>
                            <option value="Подтвержден" @if ($order['status'] == "Подтвержден")
                            selected
                            @endif>Подтвержден</option>
                            <option value="Оплачен" @if ($order['status'] == "Оплачен")
                            selected
                            @endif>Оплачен</option>
                            <option value="Отправлен" @if ($order['status'] == "Отправлен")
                            selected
                            @endif>Отправлен</option>
                            <option value="Выполнен" @if ($order['status'] == "Выполнен")
                            selected
                            @endif>Выполнен</option>
                            <option value="Возврат" @if ($order['status'] == "Возврат")
                            selected
                            @endif>Возврат</option>
                            <option value="Удалён" @if ($order['status'] == "Удалён")
                            selected
                            @endif>Удалён</option>
                          </select>
                        </div>
                        <div class="form-group">
                          Имя:<input type="text" maxlength="250" value="{{$order['name']}}" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                          Email:<input type="text" maxlength="250" value="{{$order['email']}}" name="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                          Телефон:<input type="text" maxlength="250" value="{{$order['tel']}}" name="tel" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                          <select type="text" name="options[auto][Установка]" class="form-control" placeholder="">
                            <option value="true" @if ($order['options']['auto']['Установка'] == "true")
                              selected
                            @endif>true</option>
                            <option value="false" @if ($order['options']['auto']['Установка'] == "false")
                            selected
                            @endif>false</option>
                          </select>
                        </div>
                        <div class="form-group">
                          Дизайн:<select type="text" name="options[list][Дизайн]" class="form-control" placeholder="">
                            <option value="Classic" @if ($order['options']['list']['Дизайн'] == "Classic")
                              selected
                            @endif>Classic</option>
                            <option value="Dynamic" @if ($order['options']['list']['Дизайн'] == "Dynamic")
                            selected
                          @endif>Dynamic</option>
                          </select>
                        </div>
                      </div>
                      <div class="mailbox-read-message">
                        @isset($order['options']['auto'])
                          @foreach ($order['options']['auto'] as $name_item => $item)
                              <div class="form-group">
                                {{$name_item}}:<input type="text" value="{{$item}}" name="options[auto][{{$name_item}}]" class="form-control" placeholder="">
                              </div>
                          @endforeach
                        @endisset

                        <?php if (isset($order['options']['list']['Комплектность'])) : ?>
                              <div>
                                Комплектность : <input type="text" value="{{$order['options']['list']['Комплектность']}}" name="options[list][Комплектность]" class="form-control" placeholder="">
                              </div>
                        <?php endif ?>

                        <p></p>
                        <p></p>

                        <a id="apply-settings" class="btn btn-primary">Отобразить выбраные пользователем настройки на 3д-модели</a><br><br>
                        <div class="constructor-forms row m-1">
                          <div class="col-6 border p-3">
                            <h5>Материалы основы</h5>
                            <?php if (isset($order['options']['list']['Основа'])) : ?>
                              <div>
                                <p>Материал : {{$order['options']['list']['Основа']['Материал']}}</p>
                                <p>Цвет : {{$order['options']['list']['Основа']['Цвет']}}</p>
                              </div>
                            <?php endif ?>
                            <div class="form-group">
                              <input type="text" name="options[list][Основа][Материал]" value="{{$order['options']['list']['Основа']['Материал']}}" hidden>
                              <input type="text" name="options[list][Основа][Цвет]" value="{{$order['options']['list']['Основа']['Цвет']}}" hidden>
                              Изменить выбор <select class="form-control" name="options[list][Основа][Value]" id="materialBase" onchange="change_Base(value);" >
                                    <option value="value1">Аригон гладкая чёрный</option>
                                    <option value="value2">Аригон гладкая светло-серый</option>
                                    <option value="value3">Аригон гладкая тёмно-серый</option>
                                    <option value="value4">Аригон гладкая темно-коричневый</option>
                                    <option value="value5">Аригон гладкая светло-коричневый</option>
                                    <option value="value6">Аригон гладкая бежевый</option>
                                    <option value="value7">Аригон гладкая кремовый</option>
                                    <option value="value8">Аригон гладкая белый</option>
                                    <option value="value9">Аригон гладкая красный</option>
                                    <option value="value10">Аригон гладкая оранжевый</option>
                                    <option value="value11">Аригон гладкая синий</option>

                                    <option value="value16">Аригон перфор. черный</option>
                                    <option value="value17">Аригон перфор. светло-серый</option>
                                    <option value="value18">Аригон перфор. темно-серый</option>
                                    <option value="value19">Аригон перфор. темно-коричневый</option>
                                    <option value="value20">Аригон перфор. светло-коричневый</option>
                                    <option value="value21">Аригон перфор. бежевый</option>
                                    <option value="value22">Аригон перфор. кремовый</option>
                                    <option value="value23">Аригон перфор. белый</option>
                                    <option value="value24">Аригон перфор. красный</option>
                                    <option value="value25">Аригон перфор. оранжевый</option>
                                    <option value="value26">Аригон перфор. синий</option>
                                    <option value="value27">Аригон перфор. фиолетовый</option>
                                    <option value="value28">Аригон перфор. бирюзовый</option>
                                    <option value="value29">Аригон перфор. жёлтый</option>
                                    <option value="value30">Аригон перфор. зелёный</option>

                                    <option value="value31">Эко замша чёрный</option>
                                    <option value="value32">Эко замша темно-серый</option>
                                    <option value="value33">Эко замша светло-серый</option>
                                    <option value="value34">Эко замша темно-бежевый</option>
                                    <option value="value35">Эко замша темно-коричневый</option>
                                    <option value="value36">Эко замша красный</option>
                                    <option value="value37">Эко замша песочно-коричневый</option>
                                    <option value="value38">Эко замша светло-коричневый</option>
                                    <option value="value39">Эко замша светло-синий</option>

                                    <option value="value40">Велюр черный</option>
                                    <option value="value41">Велюр серый</option>
                                    <option value="value42">Велюр бежевый</option>
                                    <option value="value43">Велюр коричневый</option>
                                    <option value="value44">Велюр красный</option>

                                    <option value="value45">Швайцер</option>
                              </select>
                            </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Материалы подголовника</h5>
                              <?php if (isset($order['options']['list']['Подголовник'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Подголовник']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Подголовник']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Подголовник][Материал]" value="{{$order['options']['list']['Подголовник']['Материал']}}" hidden>
                                <input type="text" name="options[list][Подголовник][Цвет]" value="{{$order['options']['list']['Подголовник']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Подголовник][Value]" id="headrestFront" onchange="change_Podgolovnik_Front(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>

                                  <option value="value46">Жаккард черный</option>
                                  <option value="value47">Жаккард бежево-серый</option>
                                  <option value="value48">Жаккард серо-синие квадраты</option>
                                  <option value="value49">Жаккард темно-синий с точкой</option>
                                  <option value="value50">Жаккард черно-серый, малые квадрат</option>
                                  <option value="value51">Жаккард серо-черные соты</option>
                                  <option value="value52">Жаккард серо-черный ромб</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Подголовник зад</h5>
                              <?php if (isset($order['options']['list']['Подголовник зад'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Подголовник зад']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Подголовник зад']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Подголовник зад][Материал]" value="{{$order['options']['list']['Подголовник зад']['Материал']}}" hidden>
                                <input type="text" name="options[list][Подголовник зад][Цвет]" value="{{$order['options']['list']['Подголовник зад']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Подголовник зад][Value]" id="headrestBack" onchange="change_Podgolovik_Back(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Подголовник бок</h5>
                              <?php if (isset($order['options']['list']['Подголовник бок'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Подголовник бок']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Подголовник бок']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Подголовник бок][Материал]" value="{{$order['options']['list']['Подголовник бок']['Материал']}}" hidden>
                                <input type="text" name="options[list][Подголовник бок][Цвет]" value="{{$order['options']['list']['Подголовник бок']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Подголовник бок][Value]" id="headrestSides" onchange="change_Podgolovnik_Sides(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Спинка верх</h5>
                              <?php if (isset($order['options']['list']['Спинка верх'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Спинка верх']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Спинка верх']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Спинка верх][Материал]" value="{{$order['options']['list']['Спинка верх']['Материал']}}" hidden>
                                <input type="text" name="options[list][Спинка верх][Цвет]" value="{{$order['options']['list']['Спинка верх']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Спинка верх][Value]" id="backTop" onchange="change_spinkaTop(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Спинка</h5>
                              <?php if (isset($order['options']['list']['Спинка'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Спинка']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Спинка']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Спинка][Материал]" value="{{$order['options']['list']['Спинка']['Материал']}}" hidden>
                                <input type="text" name="options[list][Спинка][Цвет]" value="{{$order['options']['list']['Спинка']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Спинка][Value]" id="backBase" onchange="change_spinka(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>

                                  <option value="value46">Жаккард черный</option>
                                  <option value="value47">Жаккард бежево-серый</option>
                                  <option value="value48">Жаккард серо-синие квадраты</option>
                                  <option value="value49">Жаккард темно-синий с точкой</option>
                                  <option value="value50">Жаккард черно-серый, малые квадрат</option>
                                  <option value="value51">Жаккард серо-черные соты</option>
                                  <option value="value52">Жаккард серо-черный ромб</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Боковые поддержки</h5>
                              <?php if (isset($order['options']['list']['Боковые поддержки'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Боковые поддержки']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Боковые поддержки']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Боковые поддержки][Материал]" value="{{$order['options']['list']['Боковые поддержки']['Материал']}}" hidden>
                                <input type="text" name="options[list][Боковые поддержки][Цвет]" value="{{$order['options']['list']['Боковые поддержки']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Боковые поддержки][Value]" id="SideWall" onchange="change_SideWall1(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Сиденье</h5>
                              <?php if (isset($order['options']['list']['Сиденье'])) : ?>
                                <div>
                                  <p>Материал : {{$order['options']['list']['Сиденье']['Материал']}}</p>
                                  <p>Цвет : {{$order['options']['list']['Сиденье']['Цвет']}}</p>
                                </div>
                              <?php endif ?>
                              <div class="form-group">
                                <input type="text" name="options[list][Сиденье][Материал]" value="{{$order['options']['list']['Сиденье']['Материал']}}" hidden>
                                <input type="text" name="options[list][Сиденье][Цвет]" value="{{$order['options']['list']['Сиденье']['Цвет']}}" hidden>
                                Изменить выбор <select class="form-control" name="options[list][Сиденье][Value]" id="seatBase" onchange="change_sidenie(value);">
                                  <option value="value1">Аригон гладкая чёрный</option>
                                  <option value="value2">Аригон гладкая светло-серый</option>
                                  <option value="value3">Аригон гладкая тёмно-серый</option>
                                  <option value="value4">Аригон гладкая темно-коричневый</option>
                                  <option value="value5">Аригон гладкая светло-коричневый</option>
                                  <option value="value6">Аригон гладкая бежевый</option>
                                  <option value="value7">Аригон гладкая кремовый</option>
                                  <option value="value8">Аригон гладкая белый</option>
                                  <option value="value9">Аригон гладкая красный</option>
                                  <option value="value10">Аригон гладкая оранжевый</option>
                                  <option value="value11">Аригон гладкая синий</option>

                                  <option value="value16">Аригон перфор. черный</option>
                                  <option value="value17">Аригон перфор. светло-серый</option>
                                  <option value="value18">Аригон перфор. темно-серый</option>
                                  <option value="value19">Аригон перфор. темно-коричневый</option>
                                  <option value="value20">Аригон перфор. светло-коричневый</option>
                                  <option value="value21">Аригон перфор. бежевый</option>
                                  <option value="value22">Аригон перфор. кремовый</option>
                                  <option value="value23">Аригон перфор. белый</option>
                                  <option value="value24">Аригон перфор. красный</option>
                                  <option value="value25">Аригон перфор. оранжевый</option>
                                  <option value="value26">Аригон перфор. синий</option>
                                  <option value="value27">Аригон перфор. фиолетовый</option>
                                  <option value="value28">Аригон перфор. бирюзовый</option>
                                  <option value="value29">Аригон перфор. жёлтый</option>
                                  <option value="value30">Аригон перфор. зелёный</option>

                                  <option value="value31">Эко замша чёрный</option>
                                  <option value="value32">Эко замша темно-серый</option>
                                  <option value="value33">Эко замша светло-серый</option>
                                  <option value="value34">Эко замша темно-бежевый</option>
                                  <option value="value35">Эко замша темно-коричневый</option>
                                  <option value="value36">Эко замша красный</option>
                                  <option value="value37">Эко замша песочно-коричневый</option>
                                  <option value="value38">Эко замша светло-коричневый</option>
                                  <option value="value39">Эко замша светло-синий</option>

                                  <option value="value40">Велюр черный</option>
                                  <option value="value41">Велюр серый</option>
                                  <option value="value42">Велюр бежевый</option>
                                  <option value="value43">Велюр коричневый</option>
                                  <option value="value44">Велюр красный</option>

                                  <option value="value45">Швайцер</option>

                                  <option value="value46">Жаккард черный</option>
                                  <option value="value47">Жаккард бежево-серый</option>
                                  <option value="value48">Жаккард серо-синие квадраты</option>
                                  <option value="value49">Жаккард темно-синий с точкой</option>
                                  <option value="value50">Жаккард черно-серый, малые квадрат</option>
                                  <option value="value51">Жаккард серо-черные соты</option>
                                  <option value="value52">Жаккард серо-черный ромб</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div class="col-6 border p-3">
                              <h5>Строчка</h5>
                              <?php if (isset($order['options']['list']['Строчка'])) : ?>
                                <?php if ($order['options']['list']['Строчка']['Сhecked'] == "true") : ?>
                                  <div>
                                    <p>Цвет : {{$order['options']['list']['Строчка']['Цвет']}}</p>
                                  </div>
                                <?php elseif($order['options']['list']['Строчка']['Сhecked'] == "false"): ?>
                                  <div>
                                    <p>Без строчки</p>
                                  </div>
                                <?php endif ?>
                              <?php endif ?>
                              <div class="form-group">
                                Изменить выбор 
                                <input type="text" name="options[list][Строчка][Цвет]" value="{{$order['options']['list']['Строчка']['Цвет']}}" hidden>
                                <input type="text" id="StitchOn2" name="options[list][Строчка][Сhecked]" hidden>
                                <div>
                                    <input type="checkbox" id="StitchOn" value="StitchOn" onchange="change_StitchOn(value);">
                                    <label for="StitchOn">Добавить строчку</label>
                                </div>
                                <select class="form-control" name="options[list][Строчка][Value]" id="stitchBase" onchange="change_Stitch(value);">
                                  <option value="value1">Черный 901</option>
                                  <option value="value2">Темно-серый 617</option>
                                  <option value="value3">Светло-серый 1615</option>
                                  <option value="value4">Белый 201</option>
                                  <option value="value5">Бежевый 630</option>
                                  <option value="value6">Кремовый 1453</option>
                                  <option value="value7">Светло-коричневый 1539</option>
                                  <option value="value8">Темно-коричневый 840</option>
                                  <option value="value9">Оранжевый 1430</option>
                                  <option value="value10">Бордовый 1715</option>
                                  <option value="value11">Красный 1644</option>
                                  <option value="value12">Розовый 1984</option>
                                  <option value="value13">Желтый 1109</option>
                                  <option value="value14">Зеленый 821</option>
                                  <option value="value15">Бирюзовый 1799</option>
                                  <option value="value16">Синий 1923</option>
                                  <option value="value17">Темно-серый 544</option>
                                  <option value="value18">Темно-синий 511</option>
                                  <option value="value19">Хаки 981</option>
                                  <option value="value20">Фиолетовый 1691</option>
                                </select>
                              </div>
                          </div></br></br>
                          <div>
                              
                          </div></br>
                          <div class="col-6 border p-3" id="PatternOnBlock">
                              <h5>Стёжка</h5>
                              <?php if (isset($order['options']['list']['Стёжка'])) : ?>
                                <p>Стёжка : {{$order['options']['list']['Стёжка']['Стёжка']}}</p>
                                <p>Цвет : {{$order['options']['list']['Стёжка']['Цвет']}}</p>
                                <p>Доп. : {{$order['options']['list']['Стёжка']['Доп']}}</p>
                                <?php if (stristr($order['options']['list']['Стёжка']['Доп'], "Убрать на подголовниках")): ?>
                                  <div>
                                    <p>Убрать на подголовниках</p>
                                  </div>
                                <?php endif ?>
                              <?php endif ?>
                              <div class="form-group">
                                Изменить выбор<br>
                                <input type="text" name="options[list][Стёжка][Стёжка]" value="{{$order['options']['list']['Стёжка']['Стёжка']}}" hidden>
                                <input type="text" name="options[list][Стёжка][Цвет]" value="{{$order['options']['list']['Стёжка']['Цвет']}}" hidden>
                                <input type="text" name="options[list][Стёжка][Доп]" id="PatternDop" hidden>
                                <div>
                                  <input type="checkbox" id="PatternOn" name="PatternOn" value="PatternOn" onchange="change_PatternOn(value);">
                                  <label for="PatternOn">Включить стёжку</label>
                                </div>
                                Стёжка <select class="form-control" name="options[list][Стёжка][Value]" id="PatternBase" onchange="change_Pattern(value);">
                                  <option value="value1">Анаконда</option>
                                  <option value="value2">Кобра</option>
                                  <option value="value3">Куб</option>
                                  <option value="value4">Маленький куб</option>
                                  <option value="value5">Маленький квадрат</option>
                                  <option value="value6">Паркет</option>
                                  <option value="value7">Протектор</option>
                                  <option value="value8">Ромб 40</option>
                                  <option value="value9">Ромб двойной</option>
                                  <option value="value10">Ромб двойной маленький</option>
                                  <option value="value11">Ромб одинарный</option>
                                  <option value="value12">Ромб одинарный маленький</option>
                                  <option value="value13">Соты 35</option>
                                  <option value="value14">Соты 45</option>
                                  <option value="value15">Соты 60</option>
                                  <option value="value16">Соты разделённые 60</option>
                                  <option value="value17">Трансформер</option>
                                  <option value="value18">Шестигранник</option>
                                  <option value="value19">Линии двойные</option>
                                  <option value="value20">Линии двойные 2</option>
                                  <option value="value21">Линии</option>
                                </select>
                                Цвет стёжки<select class="form-control"  name="options[list][Стёжка][Цвет]" id="PatternColorBase" onchange="change_PatternColor(value);">
                                  <option value="value1">Черный 901</option>
                                  <option value="value2">Темно-серый 617</option>
                                  <option value="value3">Светло-серый 1615</option>
                                  <option value="value4">Белый 201</option>
                                  <option value="value5">Бежевый 630</option>
                                  <option value="value6">Кремовый 1453</option>
                                  <option value="value7">Светло-коричневый 1539</option>
                                  <option value="value8">Темно-коричневый 840</option>
                                  <option value="value9">Оранжевый 1430</option>
                                  <option value="value10">Бордовый 1715</option>
                                  <option value="value11">Красный 1644</option>
                                  <option value="value12">Розовый 1984</option>
                                  <option value="value13">Желтый 1109</option>
                                  <option value="value14">Зеленый 821</option>
                                  <option value="value15">Бирюзовый 1799</option>
                                  <option value="value16">Синий 1923</option>
                                  <option value="value17">Темно-серый 544</option>
                                  <option value="value18">Темно-синий 511</option>
                                  <option value="value19">Хаки 981</option>
                                  <option value="value20">Фиолетовый 1691</option>
                                </select>
                                <div>
                                  <input type="checkbox" id="pattern3d" name="pattern3d" onchange="if ($(this).is(':checked')) {change_PatternOn_3d($('#PatternBase').val());} else change_Pattern($('#PatternBase').val());">
                                  <label for="pattern3d">Объёмная стёжка</label>
                                </div>
                                <div>
                                  <input type="checkbox" id="PatternOnHeadrest" name="PatternOnpodgolovnik" value="PatternOnpodgolovnik"
                                onchange="change_PatternOnpodgolovnik(value);">
                                  <label for="PatternOnHeadrest">Выключить на подголовнике</label>
                                </div>
                              </div>
                          </div></br></br>
                        </div>

                        
                        {{--@isset($order['options']['list'])
                          @foreach ($order['options']['list'] as $name_item => $item)
                            @if (gettype($item) == "string")
                              <p><b>{{$name_item}}</b> : {{$item}}</p>
                            @endif
                            @if (gettype($item) == "array")
                            <hr>
                              <div><h5>{{$name_item}}</h5>
                              @foreach ($item as $name_subitem => $subitem)
                                <p><b>{{$name_subitem}}</b> : {{$subitem}}</p>
                              @endforeach
                              </div>
                            @endif
                          @endforeach
                        @endisset--}}

                      </div>
                      <div class="card-footer">
                        <a href="{{ route('order.index') }}" type="submit" class="btn btn-primary">Назад</a>
                        <button type="submit" id="submit" class="btn btn-success">Обновить</button>
                      </div>
                    </div>
                </div>
            </div> 
        </div><!-- /.container-fluid -->
      </form>
      </section>
      <!-- /.content -->
@endsection

@section('pre-script')
  <script src="{{ url('constructor-app/TemplateData/UnityProgress.js') }}"></script>
  <script src="{{ url('constructor-app/Build/UnityLoader.js') }}"></script>
  <script src="{{ url('constructor-app/constructor.js') }}"></script>
@endsection

@section('script-in')
  
  $('#apply-settings').on('click', function() {
    // Основа
    <?php if (isset($order['options']['list']['Основа']['Value'])) : ?>
      //$('#materialBase option[value={{$order['options']['list']['Основа']['Value']}}]').prop('selected', true);
      $('#materialBase').val('{{$order['options']['list']['Основа']['Value']}}');
      change_Base('{{$order['options']['list']['Основа']['Value']}}');
    <?php endif ?>

    // Подголовник
    <?php if (isset($order['options']['list']['Подголовник']['Value'])) : ?>
      //$('#headrestFront option[value={{$order['options']['list']['Подголовник']['Value']}}]').prop('selected', true);
      $('#headrestFront').val('{{$order['options']['list']['Подголовник']['Value']}}');
      change_Podgolovnik_Front('{{$order['options']['list']['Подголовник']['Value']}}');
    <?php endif ?>

    // Подголовник зад
    <?php if (isset($order['options']['list']['Подголовник зад']['Value'])) : ?>
      $('#headrestBack option[value={{$order['options']['list']['Подголовник зад']['Value']}}]').prop('selected', true);
      change_Podgolovik_Back('{{$order['options']['list']['Подголовник зад']['Value']}}');
    <?php endif ?>

    // Подголовник бок
    <?php if (isset($order['options']['list']['Подголовник бок']['Value'])) : ?>
      $('#headrestSides option[value={{$order['options']['list']['Подголовник бок']['Value']}}]').prop('selected', true);
      change_Podgolovnik_Sides('{{$order['options']['list']['Подголовник бок']['Value']}}');
    <?php endif ?>

    // Спинка верх
    <?php if (isset($order['options']['list']['Спинка верх']['Value'])) : ?>
      $('#backTop option[value={{$order['options']['list']['Спинка верх']['Value']}}]').prop('selected', true);
      change_spinkaTop('{{$order['options']['list']['Спинка верх']['Value']}}');
    <?php endif ?>

    // Спинка
    <?php if (isset($order['options']['list']['Спинка']['Value'])) : ?>
      $('#backBase option[value={{$order['options']['list']['Спинка']['Value']}}]').prop('selected', true);
      change_spinka('{{$order['options']['list']['Спинка']['Value']}}');
    <?php endif ?>

    // Боковые поддержки
    <?php if (isset($order['options']['list']['Боковые поддержки']['Value'])) : ?>
      $('#SideWall option[value={{$order['options']['list']['Боковые поддержки']['Value']}}]').prop('selected', true);
      change_SideWall1('{{$order['options']['list']['Боковые поддержки']['Value']}}');
    <?php endif ?>

    // Сиденье
    <?php if (isset($order['options']['list']['Сиденье']['Value'])) : ?>
      $('#seatBase option[value={{$order['options']['list']['Сиденье']['Value']}}]').prop('selected', true);
      change_sidenie('{{$order['options']['list']['Сиденье']['Value']}}');
    <?php endif ?>

    // Строчка
    <?php if (isset($order['options']['list']['Строчка'])) : ?>
      <?php if (isset($order['options']['list']['Строчка']['Сhecked'])) : ?>
        $("#StitchOn").prop('checked', {{$order['options']['list']['Строчка']['Сhecked']}}); 
        change_StitchOn("StitchOn");
      <?php endif ?>
      <?php if (isset($order['options']['list']['Строчка']['Value'])) : ?>
        $('#stitchBase option[value={{$order['options']['list']['Строчка']['Value']}}]').prop('selected', true);
        change_Stitch('{{$order['options']['list']['Строчка']['Value']}}');
      <?php endif ?>
    <?php endif ?>

    // Стёжка
    <?php if (isset($order['options']['list']['Стёжка'])) : ?>
      <?php if ($order['options']['list']['Стёжка'] != "Без стёжки") : ?>

        $("#PatternOn").prop('checked', true);
        change_PatternOn(false);
        change_PatternOn(true);

        <?php if (isset($order['options']['list']['Стёжка']['Value'])) : ?>
          $('#PatternBase option[value={{$order['options']['list']['Стёжка']['Value']}}]').prop('selected', true);
          change_Pattern('{{$order['options']['list']['Стёжка']['Value']}}');
          <?php if (isset($order['options']['list']['Стёжка']['Доп'])) : ?>
            <?php if (stristr($order['options']['list']['Стёжка']['Доп'], "Добавлять поролон")) : ?>
              $('#Pattern3dBase option[value={{$order['options']['list']['Стёжка']['Value']}}]').prop('selected', true);
              change_PatternOn_3d('{{$order['options']['list']['Стёжка']['Value']}}');
            <?php endif ?>
          <?php endif ?>
        <?php endif ?>

        <?php if (isset($order['options']['list']['Стёжка']['ValueP'])) : ?>
          $('#PatternColorBase option[value={{$order['options']['list']['Стёжка']['ValueP']}}]').prop('selected', true);
          change_PatternColor('{{$order['options']['list']['Стёжка']['ValueP']}}');
        <?php endif ?>

        <?php if (isset($order['options']['list']['Стёжка']['Доп'])) : ?>
          <?php if (stristr($order['options']['list']['Стёжка']['Доп'], "Убрать на подголовниках")) : ?>
            $("#PatternOnHeadrest").prop('checked', true); 
            change_PatternOnpodgolovnik("PatternOnpodgolovnik");
          <?php endif ?>
        <?php endif ?>

      <?php endif ?>
    <?php endif ?>
    
    
  });
@endsection

@section('script')
  <script>
    $('#StitchOn').on('click', function() {
      $('#StitchOn2').val($('#StitchOn').is(':checked'));
    });
    $('#PatternOnBlock').on('click', function() {
      let dop = "";
      if($("#pattern3d").prop('checked')) { dop = "Добавлять поролон, "; }
        else dop = "Не добавлять поролон, ";
      if($("#PatternOnHeadrest").prop('checked')) dop = dop + "Убрать на подголовниках"
        else dop = dop + "Стёжка на подголовниках";
      $('#PatternDop').val(dop);
    });

    /* input form */
    $('input').keypress(function(e) {
        if (e.which !== 0) {
          if (e.which == 13) return;
          $(this).val($(this).val()+e.key);
        };
        if (e.which == 32){//space bar
          $(this).val($(this).val()+' ');
        };
      });
      $('input').keyup  (function(e) {
        if (e.which == 8) {//backspace
          $(this).val( $(this).val().slice(0, -1) );
        };
      });
  </script>
  
@endsection