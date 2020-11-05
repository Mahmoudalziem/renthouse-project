@extends('layouts.default')

@section('title')
    Login
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}" />
@endsection

@section('content')
    <section class="login_section">
        <div class="container-fluid">
            <div class="mx-auto">
                <div class="login_content col-8 mx-auto">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="login_details">
                                <div class="login_details_signup">
                                    <!----->
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="site_logo">
                                            <a href="/" target="_self">
                                                <img src="{{ asset('images/logo/logo.jpg') }}" alt="site_log">
                                            </a>
                                        </span>
                                        <span>Don't have an account ? </span>
                                        <span class="signup_button">
                                            <a href="register" target="_self">Register</a>
                                        </span>
                                    </div>
                                    <!----->
                                </div>

                                <div class="login_head">
                                    <h3>Welcome</h3>
                                    <p>
                                        Welcome back, please login to your account.
                                    </p>
                                </div>
                                <!------->
                                {!! Form::open(['method' => 'POST','action' => 'loginController@access','name'=>'form_login','class'=>'form_login']) !!}
                                    {{ Form::hidden('_method','POST',['class' => '_method']) }}
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <div class="error">{{ $error }}</div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-primary">
                                            <div class="error">{{ session('error') }}</div>
                                        </div>
                                    @endif
                                    <div class="group_input" data-validate="E-Mail Required">
                                        <input type="email" class="input_100" name="email" placeholder="E-Mail" value="{{ old('email') }}">
                                        <i class="fa fa-envelope"></i>
                                    </div>

                                    <div class="group_input" data-validate="Password Required">
                                        <input type="password" class="input_100" name="password" placeholder="Password" autocomplete="off" value="{{ old('password') }}">
                                        <i class="fa fa-lock"></i>
                                        <span class="show_password">
                                            <i class="fa fa-eye" onclick="showPassword(this)"></i>
                                        </span>
                                    </div>

                                    <div class="group_forget_remember">

                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input remember" name="remember" id="custom_check">
                                            <label class="custom-control-label mt-0" for="custom_check">
                                                Remember Me
                                            </label>
                                        </div>

                                        <div class="forget_password">
                                            <a href="/forget">Forget Password ?</a>
                                        </div>

                                    </div>

                                    <div class="form_submit_button">
                                        <button type="submit" class="btn submit_form">
                                            Login
                                            <i class="fa fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {{ Html::script(asset('js/pages/login.js')) }}
@endsection
