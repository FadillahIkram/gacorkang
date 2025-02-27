<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medis extends Model
{
    use HasFactory;

    protected $table = 'medis';

    protected $fillable = ['pasien_id', 'dx', 'tx', 'keterangan', 'kunjungan'];

    public function patient()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}

