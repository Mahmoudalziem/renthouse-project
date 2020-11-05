@extends('layouts.default')

@section('title')
    Register
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/register.css') }}" />
@endsection


@section('content')
<section class="signup_section">
    <div class="container-fluid">
        <div class="mx-auto">
            <div class="signup_content col-8 mx-auto">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="signup_details">

                            <div class="login_details_signup">
                                <!----->
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="site_logo">
                                        <a href="/" target="_self">
                                            <img src="{{ asset('images/logo/logo.jpg') }}" alt="site_log">
                                        </a>
                                    </span>
                                    <span>Already have an account ? </span>
                                    <span class="login_button">
                                        <a href="/login" target="_self">Login</a>
                                    </span>
                                </div>
                                <!----->
                            </div>

                            <div class="signup_head">
                                <h3>We Are The Mentors</h3>
                                <p>
                                    Welcome , Please create your account.
                                </p>
                            </div>

                            {!! Form::open(['action' => 'userController@store','method' => 'post','class' => 'form_signup' , 'name' => 'form_signup']) !!}
                                {!! Form::hidden('_methos','POST',['class' => 'method']) !!}
                                <div class="validate_error d-none">Welcome :) </div>
                                <!------->
                                <div class="group_input" data-validate="Name Required">
                                    <input type="text" class="input_100" name="name" minlength="5" placeholder="Full Name" autocomplete="off" required autofocus>
                                    <i class="fa fa-user"></i>
                                </div>

                                <div class="group_input" data-validate="E-Mail Required">
                                    <input type="email" class="input_100" name="email" placeholder="E-Mail" required>
                                    <i class="fa fa-envelope"></i>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="group_input" data-validate="Required">
                                            <input type="password" class="input_100" name="password" autocomplete="off" placeholder="Password" minlength="6" required>
                                            <i class="fa fa-lock"></i>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="group_input" data-validate="Required">
                                            <input type="password" class="input_100" name="confirm_password" autocomplete="off" placeholder="Confirm Password" minlength="6" required>
                                            <i class="fa fa-lock"></i>
                                        </div>
                                    </div>

                                </div>

                                <div class="form_submit_button">
                                    <button type="submit" class="btn submit_form">
                                        register
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
    {{ Html::script(asset('js/pages/register.js')) }}
@endsection
