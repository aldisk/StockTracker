<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Barang', 'ID_Transaksi', 'jumlah'];

    // Relationships
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_Barang', 'id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'ID_Transaksi', 'id');
    }
}
