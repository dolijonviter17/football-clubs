<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function manager()
    {
        return $this->hasOne(Manager::class);
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player');
    }

    public function images(){
        return asset('storage/'.$this->logo);
    }
    
}
