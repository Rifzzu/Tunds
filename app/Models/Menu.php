<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    protected $fillable=['jenisMenu', 'namaMenu', 'hargaMenu'];
    public function cafe()
    {
    	return $this->belongsTo('App\Models\Cafe');
    }
}
