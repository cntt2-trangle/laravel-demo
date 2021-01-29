<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Location;

class Workplace extends Model
{
    public $fillable = [
        'name'
    ];

    protected function hasManyUser() {
        return $this->hasMany(User::class);
    }

    protected function location() {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
}
