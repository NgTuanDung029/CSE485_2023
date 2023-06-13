<form action="{{ route('theloai.luu') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="ten_tloai">Tên thể loại</label>
        <input type="text" name="ten_tloai" value="" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </div>
</form>
