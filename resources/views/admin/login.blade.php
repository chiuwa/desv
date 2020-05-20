@extends('layouts.app')
@section('title',setting('site.title') ." |  Login")

<head>
    <meta charset="UTF-8">
	
</head>
<body>
@section('main_page')
  <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumbs text-center">
<div class="login_page">
    @if ($errors->has('fail'))
        <div class="fail">{{ $errors->first('fail') }}</div>
    @endif
    {{ Form::open(['url'=>'login', 'method'=>'post']) }}
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Login') }}
    {{ Form::close() }}
	</div>
	</div>
	</div>
	</div>
	@endsection

</body>
</html>