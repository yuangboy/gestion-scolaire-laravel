<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

     protected $table = 'school_classes';

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function subjects() {
        return $this->belongsToMany(Subject::class, 'class_subjects');
    }

    public function fees() {
        return $this->hasMany(Fee::class);
    }


}
