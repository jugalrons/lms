<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function exams(){
        return $this->hasMany(Exam::class);
    }

    public function eclasses(){
        return $this->hasMany(eclass::class);
    }
}
