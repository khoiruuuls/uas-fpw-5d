<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dosens()
    {
        return $this->belongsToMany('App\Models\Dosen')->withTimestamps();
    }
}
