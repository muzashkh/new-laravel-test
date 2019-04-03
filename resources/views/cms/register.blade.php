@extends('layouts.app')

@section('page-title', 'Register Page')

@section('content')

    <h4>Registration Form</h4>
    {{ Form::open(['url'=> route('admin.registerpost'), 'method' => 'POST']) }}

    {!! Form::label('username', 'Username') !!}
    {!! Form::text('username', null, array('class' => 'form-control')) !!}
    <?php if($errors->has('username')){   ?>
        <div class="has-error has-feedback">
            <?php echo $errors->first('username'); ?>
        </div>
    <?php } ?>

    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, array('class' => 'form-control')) !!}
    <?php if($errors->has('email')){   ?>
        <div class="has-error has-feedback">
            <?php echo $errors->first('email'); ?>
        </div>
    <?php } ?>

    {!! Form::label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, array('class' => 'form-control')) !!}
    <?php if($errors->has('first_name')){   ?>
        <div class="has-error has-feedback">
            <?php echo $errors->first('first_name'); ?>
        </div>
    <?php } ?>

    {!! Form::label('last_name', 'Last Name') !!}
    {!! Form::text('last_name', null, array('class' => 'form-control')) !!}
    <?php if($errors->has('last_name')){   ?>
        <div class="has-error has-feedback">
            <?php echo $errors->first('last_name'); ?>
        </div>
    <?php } ?>

    {!! Form::label('password', 'Password') !!}
    <input type="password" name="password" id="password" class="form-control">
    <?php if($errors->has('password')){   ?>
        <div class="has-error has-feedback">
            <?php echo $errors->first('password'); ?>
        </div>
    <?php } ?>

    {!! Form::label('conf_password', 'Confirm Password') !!}
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">


    <button type="submit" class="btn btn-primary">
        <i class="fas fa-sign-in-alt"></i> Register
    </button>

    {{ Form::close() }}

@endsection