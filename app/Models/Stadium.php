<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $table = 'stadium';
    use HasFactory;


    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
