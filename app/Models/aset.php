<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aset extends Model
{
    use HasFactory;
    protected $table ='aset';
    protected $fillable= ['nama_aset'];
    
    public function pembeli()
    {
        return $this->hasMany(pembeli::class);
    }
}