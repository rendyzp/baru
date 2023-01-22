<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Siswa;

class Kelas extends Model
{
    use HasFactory;

    // protected $connection = 'mongodb';
    // protected $collection = 'kelas';
    // protected $guarded = ["id"];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
