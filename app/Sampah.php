<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    public function transaksis() {
    	return $this->hasMany('App\Transaksi');
    }
}
