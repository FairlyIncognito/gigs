<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    // Relationship to gallery
    public function profile() {
        return $this->belongsTo(Profile::class, 'profile_id');
    }


}