@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Category create</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form class="row g-3 needs-validation" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" novalidate> 
        @csrf
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" >
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="" class="form-control">
                <option value="1">Hoạt động</option>
                <option value="0">Tạm khóa</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" >
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
</div>
@endsection