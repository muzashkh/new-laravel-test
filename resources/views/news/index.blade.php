@extends('layouts.app')

@section('page-title', 'News Page')

@section('content')

<h1>News Listing</h1>

<div class="row">

    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->summary }}</td>
                    <td>
                        <a href="{{ route('news.edit', ['news_id' => $article->id]) }}">Edit</a>
                        <a href="{{ route('news.delete', ['id' => $article->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection