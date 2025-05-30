@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Category edit</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form class="row g-3 needs-validation" action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data" novalidate>
        @method('PUT')
        @csrf
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="" class="form-control">
                @if($category->status === 1)
                    <option value="1" selected>Hoạt động</option>
                    <option value="0">Tạm khóa</option>
                @else
                    <option value="1">Hoạt động</option>
                    <option value="0" selected>Tạm khóa</option>
                @endif
            </select>
        </div>
        <div class="col-md-4">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}">
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" value="{{$category->slug}}" readonly />
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <input type="file" name="thumbnail" id="thumbnail" required>
                    <label for="thumbnail">Choose file</label>
                </div>
                <div class="col-md-6">
                    @if ($category->thumbnail !== null)
                    <img src="{{asset('img/categories/'.$category->thumbnail)}}" alt="category" width="100%" height="400px" />
                    @endif
                </div>
                <div class="col-md-6">
                    <img src="" alt="category" id="thumbnail-image" width="100%" height="400px" />
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
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