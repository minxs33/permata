<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function pelanggan()
    {
        return $this->belongsTo('App\Transaksi');
    }
    protected $table = 'transaksis';
    protected $fillable = [
        'before_transaction','after_transaction',
    ];

    protected $primaryKey = "id_transaksi";
}
