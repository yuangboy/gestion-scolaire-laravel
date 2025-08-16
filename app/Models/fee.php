<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    public function class() {
        return $this->belongsTo(SchoolClass::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
