@extends('layouts.client')
@section('content')

<div class="container">
    <h2 class="my-4 text-center">{{$game->name}}</h2>  
    <span class="post-content">{!! $game->description !!}</span>
</div>

@endsection