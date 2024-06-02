@extends('layouts.client')
@section('content')

<section id="game-ID" class="game-section pt-4">
    <div class="container"> 
        <h2 class="text-center mb-3">All category</h2>
        <div class="row">    
            @foreach ($games as $game)           
            <div class="col-md-3 d-flex flex-column align-items-center">
                <a href="{{url('/game/'.$game->id)}}">
                    <img src="{{asset('img/games/'.$game->thumbnail)}}" alt="game" width="100%" />
                </a>              
                <a href="#" class="my-3 fs-5">{{$game->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section> 

@endsection