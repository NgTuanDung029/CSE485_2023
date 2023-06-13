<form action="{{ route('theloai.xoa', $theloai->ma_tloai) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="form-group">
        <label for="ma_tloai">Mã tác giả</label>
        <input type="hidden" name="ma_tloai" value="{{ $theloai->ma_tloai }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="ten_tloai">Tên tác giả</label>
        <input type="text" name="ten_tloai" value="{{ $theloai->ten_tloai }}" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Xóa</button>
    </div>
</form>
