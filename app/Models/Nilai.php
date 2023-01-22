<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Siswa;

class Nilai extends Model
{
    use HasFactory;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
