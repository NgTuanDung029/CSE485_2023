@extends('layout.default')
@section('title', 'Thêm mới tác giả')
@section('name', 'Thêm Mới Tác Giả')
@section('content')
<form action="{{ route('tacgia.luu') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="ten_tgia">Tên tác giả</label>
        <input type="text" name="ten_tgia" value="" class="form-control">
    </div>
    <div class="form-group">
        <label for="hinh_tgia">Hình ảnh của tác giả</label>
        <input type="text" name="hinh_tgia" value="" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
</form>
@endsection
