<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'company', 'location', 'website', 'email', 'description', 'job_roles', 'logo'];

    /* protected $guarded = []; */

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('job_roles', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('company', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('job_roles', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}