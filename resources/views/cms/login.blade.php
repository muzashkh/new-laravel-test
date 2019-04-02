@extends('layouts.app')

@section('page-title', 'Login Page')

@section('content')

    {{ Form::open(['url'=> route('admin.loginpost'), 'method' => 'POST']) }}

    <h1>Hello World</h1>
    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, array('class' => 'form-control')) !!}

    {!! Form::label('password', 'Password') !!}
    {!! Form::text('password', null, array('class' => 'form-control')) !!}


    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Login
    </button>

    {{ Form::close() }}

@endsection