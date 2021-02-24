@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Articles
    </div>
</div>
@endsection
@section('content_table')
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td> {{$article->title}}</td>
            <td>{{$article->body}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection