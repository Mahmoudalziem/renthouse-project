@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <div class="settings-container">
        <div class="container">
            <div class="col-md-6 col-12 mx-auto">
                <div class="change_password_container">
                    {!! Form::open(['action' => 'adminController@addSubAdmin','name' => 'form_addadmin' , 'method' => 'POST' , 'class' => 'form_change_password']) !!}
                        {!! Form::hidden('_method','POST') !!}
                        <label>Full Name *</label>
                        <div class="group_input" data-validate="Password Required">
                            <input type="text" name="name" placeholder="Full Name" required>
                            <i class="fa fa-user"></i>
                        </div>

                        <label>E-mail *</label>
                        <div class="group_input" data-validate="Password Required">
                            <input type="email" name="email" placeholder="E-mail"  required>
                            <i class="fa fa-user"></i>
                        </div>

                        <label>Password *</label>
                        <div class="group_input" data-validate="Password Required">
                            <input type="password" name="password" placeholder="Password" required minlength="6">
                            <i class="fa fa-lock"></i>
                        </div>

                        <label>Confirm Password *</label>
                        <div class="group_input" data-validate="Confirm Required">
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required minlength="6">
                            <i class="fa fa-lock"></i>
                        </div>


                        <div class="form_submit_button">
                            <button type="submit" class="btn submit_form">
                                add Admin
                                <i class="fa fa-long-arrow-right"></i>
                            </button>
                        </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/settings.css') }}">
@stop

@section('js')
    <script type="text/javascript" src="{{asset('js/admin/settings.js')}}"></script>
@stop
