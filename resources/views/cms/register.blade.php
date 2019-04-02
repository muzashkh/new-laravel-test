@extends('layouts.app')

@section('page-title', 'Login Page')

@section('content')

    <h4>Registration Form</h4>
    {{ Form::open(['url'=> route('admin.registerpost'), 'method' => 'POST']) }}

    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, array('class' => 'form-control')) !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, array('class' => 'form-control')) !!}

    {!! Form::label('firstname', 'First Name') !!}
    {!! Form::text('firstname', null, array('class' => 'form-control')) !!}

    {!! Form::label('lastname', 'Last Name') !!}
    {!! Form::text('lastname', null, array('class' => 'form-control')) !!}

    {!! Form::label('password', 'Password') !!}
    <input type="password" name="password" id="password" class="form-control">

    {!! Form::label('conf_password', 'Confirm Password') !!}
    <input type="password" name="conf_password" id="conf_password" class="form-control">


    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Login
    </button>

    {{ Form::close() }}

@endsection