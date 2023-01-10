<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eclass extends Model
{

    
    use HasFactory;

    public function homework(){
        $this->hasMany(Homework::class);
    }

    public function attendences(){
        $this->hasMany(Attendance::class);
    }
}
