@extends('layout.default')
@section('title', 'Danh sách tác giả')
@section('name', 'Quản Lý Tác Giả')
@section('content')
    <a href="{{ route('tacgia.them') }}" class="btn btn-success mb-2">Thêm mới tác giả</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã tác giả</th>
                <th scope="col">Tên tác giả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ds_tacgia as $key => $tacgia)
                <tr>
                    <th scope="row">{{ count($ds_tacgia) - $key }}</th>
                    <td>{{ $tacgia->ten_tgia }}</td>
                    <td><img src="{{ $tacgia->hinh_tgia }}" style="width: 100px; height: 100px"></td>
                    <td>
                        <a href="{{ route('tacgia.thongtin', $tacgia->ma_tgia) }}" class="btn btn-warning">Xem</a>
                        <a href="{{ route('tacgia.sua', $tacgia->ma_tgia) }}" class="btn btn-primary">Sửa</a>
                        <a href="{{ route('tacgia.xoa', $tacgia->ma_tgia) }}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    @endsection
