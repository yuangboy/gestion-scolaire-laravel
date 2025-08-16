<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function class() {
        return $this->belongsTo(SchoolClass::class);
    }

    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }

    public function guardian() {
        return $this->belongsTo(User::class, 'guardian_id');
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function attendances() {
        return $this->hasMany(Attendance::class);
    }

}
