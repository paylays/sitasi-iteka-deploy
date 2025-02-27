<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $guarded;

    public function dosens()
    {
        return $this->belongsTo(User::class, 'dosen', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
