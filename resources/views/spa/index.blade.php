@extends('layouts.app')


@section('content')
<div id="app">
    <h2>Articles</h2>
    <articles-component></articles-component>
    <h2>Categories</h2>
    <categories-component></categories-component>
    <h2>Tags</h2>
    <tags-component></tags-component>
</div>
<script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
@endsection