<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $fillable = [
        'nama_lengkap', 'jenis_kelamin', 'ttl', 'alamat', 'pekerjaan',
    ];

    protected $primaryKey = "id_pelanggan";
    
    public function Agen()
    {
        return $this->belongsTo('App\Pelanggan');
    }
}
