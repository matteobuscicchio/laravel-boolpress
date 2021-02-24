@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Tag
    </div>
</div>
@endsection
@section('content_table')
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td> {{$tag->tag}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection