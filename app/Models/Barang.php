<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    public $timestamps = false;

    // Relationships
    public function barangTransaksis()
    {
        return $this->hasMany(BarangTransaksi::class, 'ID_Barang', 'id');
    }

    public function getTotalAmount()
    {
        $totalAmount = 0;

        foreach ($this->barangTransaksis as $barangTransaksi) {
            $amount = $barangTransaksi->jumlah;

            // Check transaksi type: 0 for incoming, 1 for outgoing
            if ($barangTransaksi->transaksi->type == 0) {
                $totalAmount += $amount; // Increase amount for incoming
            } elseif ($barangTransaksi->transaksi->type == 1) {
                $totalAmount -= $amount; // Decrease amount for outgoing
            }
        }

        return $totalAmount;
    }
    
}
