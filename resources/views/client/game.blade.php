@extends('layouts.client')
@section('content')

<div class="container">
    <h2 class="my-4 text-center fw-bold">{{$game->name}}</h2>  
    <span class="post-content fs-5">{!! $game->description !!}</span>
</div>

@endsection