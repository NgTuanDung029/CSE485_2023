<?php

namespace App\Http\Controllers;
use App\Models\TheLoai;
use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    // Read
    public function getDsTheLoai() {
        $ds_theloai = TheLoai::all();
        return $ds_theloai;
    }

    public function getTheLoaiById($ma_tloai) {
        $theloai = TheLoai::find($ma_tloai);;
        return $theloai;
    }

    // Create
    public function createTheLoai()
    {
        return view('theloai.them');
    }

    public function storeTheLoai(Request $request)
    {
        $theloai = new TheLoai();
        $theloai->ten_tloai = $request->get('ten_tloai');
        $theloai->save();
        return redirect('theloai');
    }

    // Update
    public function editTheLoai($ma_tloai)
    {
        $theloai = TheLoai::find($ma_tloai);
        return view('theloai.chinhsua', ['theloai' => $theloai]);
    }

    public function updateTheLoai(Request $request, $ma_tloai)
    {
        $theloai = TheLoai::find($ma_tloai);
        $theloai->ten_tloai = $request->get('ten_tloai');
        $theloai->update();
        return redirect('theloai');
    }

    // Delete
    public function deleteTheLoai($ma_tloai)
    {
        $theloai = TheLoai::find($ma_tloai);
        return view('theloai.xoa', ['theloai' => $theloai]);
    }

    public function confirmDeleteTheLoai($ma_tloai) {
        $theloai = TheLoai::find($ma_tloai);
        $theloai->delete();
        return redirect('theloai');
    }
}
