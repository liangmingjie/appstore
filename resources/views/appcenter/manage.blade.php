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
    <div class="form-horizontal">
        @foreach($application as $app)
                <div class="form-group">
                    {!! Form::label('user_name','用户名:', ['class' => 'col-md-1 control-label','value' => '$app->name']) !!}
                    <div class="col-md-6">
                        {!! Form::text('user_name', "$app->name", ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('user_name','用户名:', ['class' => 'col-md-1 control-label','value' => '$app->name']) !!}
                    <div class="col-md-6">
                        {!! Form::text('user_name', "$app->name", ['class' => 'form-control']) !!}
                    </div>
                </div>
        @endforeach
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