@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>Game page</h1>
    <div>
        <a href="{{route('game.create')}}" class="btn btn-primary btn-sm">Thêm mới</a>
        <a href="{{url('admin/game/trash')}}" class="btn btn-secondary btn-sm">Thùng rác</a>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Hot Game</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(count($games) > 0)
            @foreach($games as $key => $game)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$game->name}}</td>
                <td>
                    @if($game->status === 1)
                        <span class="text-success">Hoạt động</span>
                    @else
                        <span class="text-danger">Tạm khóa</span>
                    @endif
                </td>
                <td>
                    @if($game->hotGame === 1)
                        <span class="text-success">Game nổi bật</span>
                    @else
                        <span class="text-danger">Không nổi bật</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('game.edit', $game->id)}}" class="btn btn-success btn-sm" type="button">Sửa</a>
                    <a data-id="{{$game->id}}" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button">Xóa</a>
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="4">Bạn chưa tạo thể loại game nào. <a href="{{route('game.create')}}">Tạo mới thể loại game</a></td>
            </tr>
        @endif
    </tbody>
    </table>
</div>

<!-- Modal delele game -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Bạn có thực sự muốn xóa game này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btn-delete-game">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Form delele game -->
<form action="{{url('admin/game/destroy')}}" method="POST" id="form-delete-game">
    @csrf
    <input type="hidden" id="input-delete-id" name="id">
</form>

<script>
    const deleteModal = document.getElementById('deleteModal');
    const btnDeletegame = document.getElementById('btn-delete-game');
    const formDeletegame = document.getElementById('form-delete-game');
    const inputDeleteId = document.getElementById('input-delete-id');
    let gameId;

    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            gameId = button.getAttribute('data-id');
        });

        btnDeletegame.addEventListener('click', function() {
            inputDeleteId.value = gameId;
            formDeletegame.submit();
        });
    }
</script>
@endsection


