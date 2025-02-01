<?php

namespace App\Http\Controllers;

abstract class Rule_Controller
{
    public function getSolution(Request $request)
{
    $shoeId = $request->input('shoe_id');
    $dirtTypeId = $request->input('dirt_type_id');

    // Ambil semua aturan yang sesuai
    $rules = Rule::where('shoe_id', $shoeId)
                 ->where('dirt_type_id', $dirtTypeId)
                 ->get();

    // Jika ada aturan yang cocok, ambil solusinya
    if ($rules->isNotEmpty()) {
        $solutions = $rules->pluck('solution');
    } else {
        $solutions = ['Tidak ada solusi yang ditemukan untuk kombinasi ini.'];
    }

    return view('solution', compact('solutions'));
}
}
