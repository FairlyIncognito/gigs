<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

     // Relationship to user
     public function user() {
        return $this->belongsTo(User::class);
    }

    // Relationship to gallery
    public function pictures() {
        return $this->hasMany(Picture::class, 'profile_id');
    }
}