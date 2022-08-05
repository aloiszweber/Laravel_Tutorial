@extends('layouts.app')

@section('content')
<h1> Créer un nouveau post </h1>

<form method="POST" action="#">
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" class="border-gray-600 border-2" cols="30" rows="10"> </textarea>
    <button class="border-gray-600 border-2 bg-green-500" type="submit"> Créer </button>
</form>
@endsection