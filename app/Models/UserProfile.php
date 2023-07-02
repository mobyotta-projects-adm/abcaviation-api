<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}

