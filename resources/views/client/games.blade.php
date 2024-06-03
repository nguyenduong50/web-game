@extends('layouts.client')
@section('content')

<section id="game-ID" class="game-section pt-4">
    <div class="container"> 
        <h2 class="text-center mb-3">{{$category->name}}</h2>
        <div class="row">  
            @if (count($games) > 0)  
                @foreach ($games as $game)           
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <a href="{{url('/game/'.$game->slug)}}">
                        <img src="{{asset('img/games/'.$game->thumbnail)}}" alt="game" width="100%" height="190px" />
                    </a>              
                    <a href="#" class="my-3 fs-5">{{$game->name}}</a>
                </div>
                @endforeach
            @else
                <h3 class="mt-3 mb-5">Chưa có game thuộc thể loại này</h3>
            @endif
        </div>
    </div>
</section> 

@endsection