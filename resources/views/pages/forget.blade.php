@extends('layouts.default')

@section('title')
    Forget Password
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/pages/forget.css') }}" />
@endsection

@section('content')
<section class="forget_section">
    <div class="container-fluid">
        <div class="mx-auto">
            <div class="forget_content col-md-8 mx-auto">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="forget_details">

                            <div class="login_details_signup d-md-flex">
                                <span class="site_logo">
                                    <a href="/" target="_self">
                                        <img src="{{ asset('images/logo/logo.jpg') }}" alt="site_log">
                                    </a>
                                </span>
                            </div>

                            <div class="forget_head">
                                <h3>We Are The Mentors</h3>
                                <p>
                                    Please enter your email address.
                                    You will receive a link to create a new password via email.
                                </p>
                            </div>

                            {!! Form::open(['action' => 'userController@forget','method' => 'post','name' => 'forget','class' => 'form_forget']) !!}
                                {!! Form::hidden('_method','POST',['class'=>'method']) !!}
                                @if(session('error'))
                                    <div class="alert alert-primary">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                {{-- <div class="validate_error d-none"></div> --}}
                                <div class="group_input" data-validate="E-Mail Required">
                                    <input type="email" class="input_100" name="email" placeholder="E-Mail" required="" autofocus="">
                                    <i class="fa fa-user"></i>
                                </div>


                                <div class="form_submit_button">
                                    <button type="submit" class="btn submit_form">
                                        Get New Password
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
    {{ Html::script(asset('js/pages/forget.js')) }}
@endsection
