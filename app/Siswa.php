<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nim', 'institusi', 'jurusan', 'tanggal_mulai', 'tanggal_selesai'];
}
