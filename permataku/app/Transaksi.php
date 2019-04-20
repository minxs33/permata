<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function pelanggan()
    {
        return $this->belongsTo('App\Transaksi');
    }
}
