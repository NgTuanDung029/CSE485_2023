<form action="{{ route('theloai.capnhat', $theloai->ma_tloai) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="ma_tloai">Mã thể loại</label>
        <input type="hidden" name="ma_tloai" value="{{ $theloai->ma_tloai }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="ten_tloai">Tên thể loại</label>
        <input type="text" name="ten_tloai" value="{{ $theloai->ten_tloai }}" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>
