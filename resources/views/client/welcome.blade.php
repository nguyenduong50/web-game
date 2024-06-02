@extends('layouts.client')
@section('content')

<!-- Game nổi bật-->
<section id="hotgame-ID" class="game-section">
    <div class="container"> 
        <h2 class="mt-3 text-center">Game nổi bật</h2>
        <div class="row">   
            @foreach ($hotGames as $hotGame)            
            <div class="col-md-3 d-flex flex-column align-items-center">
                <a href="{{url('/game/'.$hotGame->id)}}">
                    <img class="" src="{{asset('img/games/'.$hotGame->thumbnail)}}" alt="game" width="100%">
                </a>            
                <a href="{{url('/game/'.$hotGame->id)}}" class="my-3 fs-5">{{$hotGame->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--ALL GAME-->
<section id="game-ID" class="game-section pt-4">
    <div class="container"> 
        <h2 class="text-center mb-3">All game</h2>
        <div class="row">    
            @foreach ($games as $game)           
            <div class="col-md-3 d-flex flex-column align-items-center">
                <a href="{{url('/game/'.$game->id)}}">
                    <img src="{{asset('img/games/'.$game->thumbnail)}}" alt="hot-game" width="100%" />
                </a>              
                <a href="#" class="my-3 fs-5">{{$game->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section>    

@endsection
