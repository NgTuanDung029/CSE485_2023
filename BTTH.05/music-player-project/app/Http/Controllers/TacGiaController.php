<?php

namespace App\Http\Controllers;

use App\Models\TacGia;
use Illuminate\Http\Request;

class TacGiaController extends Controller
{
    // Read
    public function getDsTacGia() {
        $ds_tacgia = TacGia::all()->reverse();
        return view('tacgia.index', compact('ds_tacgia'));
    }

    public function getTacGiaById($ma_tgia) {
        $tacgia = TacGia::find($ma_tgia);;
        return view('tacgia.chinhsua', compact('tacgia'));
    }

    // Create
    public function createTacGia()
    {
        return view('tacgia.them');
    }

    public function storeTacGia(Request $request)
    {
        $tacgia = new TacGia();
        $tacgia->ten_tgia = $request->get('ten_tgia');
        $tacgia->hinh_tgia = $request->get('hinh_tgia');
        $tacgia->save();
        return redirect('tacgia');
    }

    // Update
    public function editTacGia($ma_tgia)
    {
        $tacgia = TacGia::find($ma_tgia);
        return view('tacgia.chinhsua', ['tacgia' => $tacgia]);
    }

    public function updateTacGia(Request $request, $ma_tgia)
    {
        $tacgia = TacGia::find($ma_tgia);
        $tacgia->ten_tgia = $request->get('ten_tgia');
        $tacgia->hinh_tgia = $request->get('hinh_tgia');
        $tacgia->update();
        return redirect('tacgia');
    }

    // Delete
    public function deleteTacGia($ma_tgia)
    {
        $tacgia = TacGia::find($ma_tgia);
        return view('tacgia.xoa', ['tacgia' => $tacgia]);
    }

    public function confirmDeleteTacGia($ma_tgia) {
        $tacgia = TacGia::find($ma_tgia);
        $tacgia->delete();
        return redirect('tacgia');
    }
}
