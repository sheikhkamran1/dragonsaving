<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;
    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function service(){
        return $this->hasMany(Service::class);
    }
}
