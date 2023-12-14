<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $hidden = ['password'];
    protected $fillable = ['username', 'password', 'nama', 'type'];
    public $timestamps = false;

    // Relationships
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'username', 'username');
    }
}
