<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('job_roles', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('location_home', 'like', '%' . request('search') . '%')
                ->orWhere('location_current', 'like', '%' . request('search') . '%')
                ->orWhere('name_first', 'like', '%' . request('search') . '%')
                ->orWhere('name_last', 'like', '%' . request('search') . '%')
                ->orWhere('cover_letter', 'like', '%' . request('search') . '%')
                ->orWhere('job_roles', 'like', '%' . request('search') . '%');
        }
    }

     // Relationship to user
     public function user() {
        return $this->belongsTo(User::class);
    }

    // Relationship to gallery
    public function pictures() {
        return $this->hasMany(Picture::class, 'profile_id');
    }
}