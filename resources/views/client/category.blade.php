@extends('layouts.client')
@section('content')

<section id="game-ID" class="game-section pt-4">
    <div class="container"> 
        <h2 class="text-center mb-3">All category</h2>
        <div class="row">    
            @foreach ($categories as $category)           
            <div class="col-md-3 d-flex flex-column align-items-center">
                <a href="{{url('/category/'.$category->id)}}">
                    <img src="{{asset('img/categories/'.$category->thumbnail)}}" alt="category" width="100%" />
                </a>              
                <a href="#" class="my-3 fs-5">{{$category->name}}</a>
            </div>
            @endforeach
        </div>
    </div>
</section> 

@endsection