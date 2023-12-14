<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barangPage(Request $request) {
        $barangs = Barang::all();

        return view('input-barang', ['barangs' => $barangs]);
    }

    public function deleteBarang(Request $request, $id) {
        $barang = Barang::find($id);

        if($barang) {
            $barang -> delete();
        }

        return redirect('/input-barang');
    }
    
}
