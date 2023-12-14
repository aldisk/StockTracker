<?php

namespace App\Http\Controllers;

use App\Models\BarangTransaksi;
use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function insertTransaksi(Request $request) {
        $request->validate([
            'stuff.*' => 'nullable|string',
            'amount.*' => 'nullable|integer|min:1',
            'newStuff.*' => 'nullable|string',
            'newStuffAmount.*' => 'nullable|integer|min:1',
            'tipe' => 'required|integer',
        ]);
    
        $stuffPresent = collect($request->input('stuff'))->filter()->isNotEmpty();
        $newStuffPresent = collect($request->input('newStuff'))->filter()->isNotEmpty();
    
        if (!$stuffPresent && !$newStuffPresent) {
            return redirect()->back()->withInput();
        }
    
        $trans = Transaksi::create([
            'type' => $request->input('tipe'),
            'username' => $request->session()->get('username'),
        ]);

        foreach ($request->input('stuff') as $index => $name) {
            $amount = $request->input('amount')[$index];
    
            if (!empty($name)) {
                BarangTransaksi::create([
                    'ID_Barang' => $name,
                    'ID_Transaksi' => $trans->id,
                    'jumlah' => $amount,
                ]);
            }
        }
    
        foreach ($request->input('newStuff') as $index => $newName) {
            $newAmount = $request->input('newStuffAmount')[$index];
    
            if (!empty($newName)) {
                $newBarang = Barang::create(['nama' => $newName]);
    
                BarangTransaksi::create([
                    'ID_Barang' => $newBarang->id,
                    'ID_Transaksi' => $trans->id,
                    'jumlah' => $newAmount,
                ]);
            }
        }
    
        return redirect('/transaksi');
    }

    public function transaksiPage(Request $request) {
        $transaksiWithBarangTransaksi = Transaksi::join('barang_transaksis', 'transaksis.id', '=', 'barang_transaksis.ID_Transaksi')
        ->join('barangs', 'barang_transaksis.ID_Barang', '=', 'barangs.id')
        ->select('transaksis.*', 'barangs.nama as barang_nama', 'barang_transaksis.jumlah')
        ->get();

        return view('lihat-transaksi', ['transaksis' => $transaksiWithBarangTransaksi]);
    }

    public function  rollbackTransaksi(Request $request, $id) {
        BarangTransaksi::where('ID_Transaksi', '>=', $id)->delete();

        Transaksi::where('id', '>=', $id)->delete();

        return redirect('/transaksi');
    }

    public function stokPage(Request $request) {
        $allBarang = Barang::all();
        
        $allBarangWithTotalAmount = $allBarang->map(function ($barang) {
            $totalAmount = $barang->getTotalAmount();
            $barang->setAttribute('total_amount', $totalAmount);
            return $barang;
        });
    
        return view('lihat-stock', ['barangs' => $allBarangWithTotalAmount]);
    }

    public function dashboard(Request $request) {
        $threshold = 30; // Set your threshold value
    
        $allBarang = Barang::all();
        
        $filteredBarang = $allBarang->filter(function ($barang) use ($threshold) {
            $totalAmount = $barang->getTotalAmount();
            $barang->setAttribute('total_amount', $totalAmount);
            return $totalAmount < $threshold;
        });

        return view('index', ['barangs' => $filteredBarang]);
    }

    public function inputTransaksiPage(Request $request) {
        $data = Barang::all();
        return view('input-transaksi') -> with('data', $data);
    }
}
