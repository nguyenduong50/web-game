@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Game create</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form class="row g-3 needs-validation" action="{{route('game.store')}}" method="POST" enctype="multipart/form-data" novalidate> 
        @csrf
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="" class="form-control">
                <option value="1">Hoạt động</option>
                <option value="0">Tạm khóa</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Hot Game</label>
            <select name="hotGame" id="" class="form-control">
                <option value="1">Game nổi bật</option>
                <option value="0">Không nổi bật</option>
            </select>
        </div>
        <div class="col-md-12">
            <label for="description-game" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description-game"></textarea>
        </div>
        <div class="col-md-12">
            <label for="status" class="form-label me-3">Category</label>
            <div>
                @foreach ($categories as $category)
                    <span class="me-4">
                        <input type="checkbox" id="{{$category->id}}" name="category[]" value="{{$category->id}}">
                        <label for="{{$category->id}}">{{$category->name}}</label>
                    </span>
                @endforeach
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="thumbnail" id="thumbnail" required>
                    <label for="thumbnail">Choose file</label>
                </div>
                <div class="col-md-6">
                    <img src="" alt="game" id="thumbnail-image" width="100%" height="400px" />
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
</div>

<!-- Show image -->
<script>
    let thumbnail = document.getElementById("thumbnail");
    let thumbnailImage = document.getElementById("thumbnail-image");

    if (thumbnailImage.getAttribute('src') === '') {
        thumbnailImage.setAttribute('hidden', 'hidden');
    }

    thumbnail.addEventListener('change', function(){
        thumbnailImage.src = window.URL.createObjectURL(thumbnail.files[0]);
        thumbnailImage.removeAttribute('hidden');
    })
</script>
@endsection