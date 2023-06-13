<?php

namespace App\Http\Controllers;
use App\Models\BaiViet;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    // Read
    public function getDsBaiViet() {
        $ds_baiviet = BaiViet::all();
        return $ds_baiviet;
    }

    public function getBaiVietById($ma_bviet) {
        $baiviet = BaiViet::find($ma_bviet);;
        return $baiviet;
    }

    // Create
    public function createBaiViet()
    {
        return view('baiviet.them');
    }

    public function storeBaiViet(Request $request)
    {
        $baiviet = new BaiViet();
        $baiviet->ten_bhat = $request->get('ten_bhat');
        $baiviet->tieude = $request->get('tieude');
        $baiviet->tomtat = $request->get('tomtat');
        $baiviet->noidung = $request->get('noidung');
        $baiviet->hinhanh = $request->get('hinhanh');
        $baiviet->ngayviet = $request->get('ngayviet');
        $baiviet->save();
        return redirect('baiviet');
    }

    // Update
    public function editBaiViet($ma_bviet)
    {
        $baiviet = BaiViet::find($ma_bviet);
        return view('baiviet.chinhsua', ['baiviet' => $baiviet]);
    }

    public function updateBaiViet(Request $request, $ma_bviet)
    {
        $baiviet = BaiViet::find($ma_bviet);
        $baiviet->ten_bhat = $request->get('ten_bhat');
        $baiviet->hinhanh = $request->get('hinhanh');
        $baiviet->update();
        return redirect('baiviet');
    }

    // Delete
    public function deleteBaiViet($ma_bviet)
    {
        $baiviet = BaiViet::find($ma_bviet);
        return view('baiviet.xoa', ['baiviet' => $baiviet]);
    }

    public function confirmDeleteBaiViet($ma_bviet) {
        $baiviet = BaiViet::find($ma_bviet);
        $baiviet->delete();
        return redirect('baiviet');
    }
}
