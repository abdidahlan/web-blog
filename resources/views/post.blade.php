
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ ($post->title) }}</h1>

    <p>By.Abdi Dahlan Rangkuti in <a href="/categories/{{$post->category->slug}}">
        {{$post->category->name}}</a></p>
    
    {{ ($post->body) }}

    <a href="/blog"> Back to Post</a>
    
@endsection

