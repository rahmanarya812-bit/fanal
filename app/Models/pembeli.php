<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli'; 
    protected $fillable = ['kode_pembeli', 'nama', 'aset', 'jenis_kelamin']; 

    public function aset()
    {
        return $this->belongsTo(aset::class);
    }
}