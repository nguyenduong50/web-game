@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Category trash page</h1>
    <div>
        <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">Quay lại</a>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(count($categories) > 0)
            @foreach($categories as $key => $category)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$category->name}}</td>
                <td>
                    @if($category->status === 1)
                        <span class="text-success">Hoạt động</span>
                    @else
                        <span class="text-danger">Tạm khóa</span>
                    @endif
                </td>
                <td>{{$category->description}}</td>
                <td>
                    <a data-id="{{$category->id}}" 
                        data-bs-toggle="modal" 
                        data-bs-target="#restoreModal" 
                        type="button" 
                        class="btn btn-success btn-sm"
                        >
                        Phục hồi
                    </a>
                    <a data-id="{{$category->id}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button">Xóa vĩnh viễn</a>
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="4">Bạn chưa tạo thể loại game nào. <a href="{{route('category.create')}}">Tạo mới thể loại game</a></td>
            </tr>
        @endif
    </tbody>
    </table>
</div>

<!-- Modal delele category -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có thực sự muốn xóa category này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btn-delete-category">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Form delele category -->
<form action="{{url('admin/category/destroy')}}" method="POST" id="form-delete-category">
    @csrf
    <input type="hidden" id="input-delete-id" name="id">
</form>

<!-- Modal restore category -->
<div class="modal fade" id="restoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Phục hồi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có thực sự muốn phục hồi category này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-restore-category">Phục hồi</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
      </div>
    </div>
  </div>
</div>

<!-- Form restore category -->
<form action="{{url('admin/category/restore')}}" method="POST" id="form-restore-category">
    @csrf
    <input type="hidden" id="input-restore-id" name="id">
</form>

<script>
    const restoreModal = document.getElementById('restoreModal');
    const btnRestoreCategory = document.getElementById('btn-restore-category');
    const formRestoreCategory = document.getElementById('form-restore-category');
    const inputRestoreId = document.getElementById('input-restore-id');
    let categoryId;

    if (restoreModal) {
        restoreModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            categoryId = button.getAttribute('data-id');
        });

        btnRestoreCategory.addEventListener('click', function() {
            inputRestoreId.value = categoryId;
            formRestoreCategory.submit();
        });
    }
</script>
@endsection
