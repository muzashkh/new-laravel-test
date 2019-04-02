@extends('layouts.app')

@section('page-title', 'Login Page')

@section('content')

    {{ Form::open(['url'=> route('admin.loginpost'), 'method' => 'POST']) }}

    <h1>Hello World</h1>
    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, array('class' => 'form-control')) !!}

    {!! Form::label('password', 'Password') !!}
    {!! Form::text('password', null, array('class' => 'form-control')) !!}

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>


    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Login
    </button>

    {{ Form::close() }}

@endsection