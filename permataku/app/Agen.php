<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    protected $table = 'agens';
    protected $fillable = [
        'nama_lengkap', 'nik', 'jenis_kelamin', 'ttl', 'alamat', 'agama', 'pekerjaan', 'foto_ktp', 'no_rekening', 'pin_rekening',
    ];

    protected $primaryKey = 'id_agen';

    public function User()
    {
        return $this->belongsTo('App\Agen');
    }
    public function Pelanggan()
    {
        return $this->hasMany('App\Agen');
    }
}
