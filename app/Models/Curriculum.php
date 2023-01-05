<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classall extends Model
{
    use HasFactory;


    public function homewroks(){
        return $this->hasMany(Homewrok::class);
    }


    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
