@extends('app_dev')

@section('content')
    <h2 class="text-center">基本信息</h2>
    <hr>

    {!! Form::open(['url' => 'developer','class' => 'container text-center ']) !!}

    <div class="form-group">
        {!! Form::label('user_name','用户名:', ['class' => '']) !!}
        {!! Form::text('user_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','邮箱:', ['class' => '']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('real_name','真实姓名:', ['class' => 'control-label']) !!}
        {!! Form::text('real_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telephone','联系电话:', ['class' => 'control-label']) !!}
        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_card','身份证号码:', ['class' => 'control-label']) !!}
        {!! Form::text('id_card', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_card_image','身份证扫描件:', ['class' => 'control-label']) !!}
        {!! Form::image('http://appstore.com/images/app/logo-2.png') !!}
        {!! Form::file('id_card_image') !!}
    </div>

    {!! Form::submit('注册',['class'=> 'btn'])  !!}

    {!! Form::close() !!}

@endsection