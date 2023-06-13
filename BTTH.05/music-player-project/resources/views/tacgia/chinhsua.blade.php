@extends('layout.default')
@section('title', 'Chỉnh sửa tác giả')
@section('name', 'Chỉnh sửa tác giả')
@section('content')
<form action="{{ route('tacgia.capnhat', $tacgia->ma_tgia) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="ma_tgia">Mã tác giả</label>
        <input type="text" name="ma_tgia" value="{{ $tacgia->ma_tgia }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="ten_tgia">Tên tác giả</label>
        <input type="text" name="ten_tgia" value="{{ $tacgia->ten_tgia }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="hinh_tgia">Hình ảnh của tác giả</label>
        <input type="text" name="hinh_tgia" value="{{ $tacgia->hinh_tgia }}" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>
@endsection
