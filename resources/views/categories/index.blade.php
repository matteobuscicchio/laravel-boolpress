@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">
        Categories
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
        @foreach($categories as $categorie)
        <tr>
            <td>{{$categorie->id}}</td>
            <td> {{$categorie->category}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection