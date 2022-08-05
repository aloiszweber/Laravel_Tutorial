@extends('layouts.app')

@section('content')
<h1> Liste des articles </h1>
    @if($posts->count() > 0)
        @foreach($posts as $post)
            <h3> <a href="{{ route('aa', ['id' => $post->id]) }}"> {{$post->sentence}} </a> </h3>
        @endforeach
    @else
        <span> Aucun post en base de donnée </span>
    @endif
@endsection