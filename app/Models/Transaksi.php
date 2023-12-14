<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'username'];

    // Relationships
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'username', 'username');
    }

    public function barangTransaksis()
    {
        return $this->hasMany(BarangTransaksi::class, 'ID_Transaksi', 'id');
    }
}
