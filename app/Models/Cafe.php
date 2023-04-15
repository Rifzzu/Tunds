<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='cafe';
    protected $primaryKey='idCafe';
    protected $fillable=['namaCafe', 'deskripsi', 'alamat', 'jamBuka', 'rangeHarga',
    'gambar'];

    public function menu()
    {
    	return $this->hasMany('App\Models\Menu');
    }
}
