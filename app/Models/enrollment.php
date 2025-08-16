<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function class() {
        return $this->belongsTo(SchoolClass::class);
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }

}
