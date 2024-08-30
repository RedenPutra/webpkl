<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    // public function index(){
    //     return view('simulasi.kreditumum');
    // }

    // public function hitung(Request $request)
    // {

    //     $validated = $request->validate([
    //         'jumlah' => 'required|numeric',
    //         'lama' => 'required|numeric',
    //     ]);

    //     $jumlahp = $validated['jumlah'];
    //     $laman = $validated['lama'];
    //     $sukui = 0.02; // 2%

    //     $i = $sukui;
    //     $n = $laman;
    //     $a = ($jumlahp * $i * pow(1+$i, $n)) / (pow(1 + $i, $n)-1);

    //     $angsuranBulat = ceil($a);

    //     return redirect('simulasi.kreditumum', ['angsuran' => number_format($angsuranBulat, 0, ',', '.')]);
    // }
}
