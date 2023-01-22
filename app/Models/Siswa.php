<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Nilai;

class Siswa extends Model
{
    use HasFactory;

    // protected $connection = 'mongodb';
    // protected $collection = 'siswa';
    // protected $guarded = ["id"];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
