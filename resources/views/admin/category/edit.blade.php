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
            <div class="valid-feedback">
                Looks good!
            </div>
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
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection