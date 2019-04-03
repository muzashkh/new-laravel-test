@extends('layouts.app')

@section('page-title', 'Login Page')

@section('content')

    {{ Form::open(['url'=> route('admin.loginpost'), 'method' => 'POST']) }}

    <h1>Login Page</h1>
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, array('class' => 'form-control')) !!}
    <?php if($errors->has('email')){   ?>
    <div class="has-error has-feedback">
        <?php echo $errors->first('email'); ?>
    </div>
    <?php } ?>

    {!! Form::label('password', 'Password') !!}
    <input type="password" name="password" id="password" class="form-control">
    <?php if($errors->has('password')){   ?>
    <div class="has-error has-feedback">
        <?php echo $errors->first('password'); ?>
    </div>
    <?php } ?>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>


    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Login
    </button>
    <?php if($errors->has('username')){   ?>
    <div class="has-error has-feedback">
        <?php echo $errors->first('username'); ?>
    </div>
    <?php } ?>

    {{ Form::close() }}

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Register
    </button>

@endsection