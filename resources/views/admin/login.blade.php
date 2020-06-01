@extends('layouts.app')
@section('title',setting('site.title') ." |  Login")


@section('main_page')


                <div class="container">
                    <div class="row">
                        <div class="col-md-12 breadcrumbs">
                <div class="common_main_div col-md-5">
                    <div class="login_div">
                        @if ($errors->any())
                            @foreach($errors->all() as $message)
                                <div class="alert alert-danger " role="alert">
                                    {{$message}}
                                </div>
                            @endforeach
                        @endif
                         {!! Form::open(array('action' => 'LoginController@login')) !!}
                        <div class="login_main">
                                <div class="col-md-12">
                            <input class="un text-center" name="email" type="email" align="center" placeholder="User Email" required="true">
                                </div>
                                <div class="col-md-12">
                            <input class="pass text-center" name="password" type="password" align="center" placeholder="Password" required="true">
                                </div>
                            <div class="col-md-12 login_submit_button">
                             {{Form::submit('Login', ['class' => 'login100-form-btn text-center'])}}
                            </div>

                        </div>



                        {{ Form::close() }}
                    </div>
                </div>

            </div>
        </div>
            </div>
@endsection

