@extends('app_dev')

@section('content')
<p style="text-align: center;font-size: 40px;">应用中心</p>
<div class="container-fluid text-center">
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Appstore
            </button>
        </div>
    </div><br>

    @if($application)
        <?php
        foreach($application as $k=>$v)
            {
                $$k = $v;
            }
        ?>
    <div class="form-horizontal">
            <div class="form-group">
                {!! Form::label('user_name','用户名:', ['class' => 'col-md-1 control-label','value' => '']) !!}
                <div class="col-md-6">
                    {!! Form::text('user_name', "$user_name", ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('user_name','应用名称:', ['class' => 'col-md-1 control-label','value' => '']) !!}
                <div class="col-md-6">
                    {!! Form::text('user_name', "$name", ['class' => 'form-control']) !!}
                </div>
            </div>
    </div>
    @else

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ url('application/create') }}">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </a>
            </div>
        </div>

    @endif
</div>
@endsection