@extends('layouts.app')

@section('page-title', 'News Page')

@section('content')

    <h1>News Details</h1>

    {{ Form::open(['url' => route('news.editpost', ['id' => $article->id]), 'method' => 'POST']) }}
        <div class="row">
            <div class="form-group col-md-12">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', $article->title, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group col-md-12">
                    {!! Form::label('summary', 'Summary') !!}
                    {!! Form::textarea('summary', $article->summary, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group col-md-12">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', $article->description, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group col-md-12 text-center">
                    <button type="submit">Save</button>
            </div>
        </div>
    {{ Form::close() }}

@endsection