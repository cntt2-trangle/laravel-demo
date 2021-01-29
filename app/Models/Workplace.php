<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Workplace extends Model
{
    public $fillable = [
        'name'
    ];

    protected function hasManyUser() {
        return $this->hasMany(User::class);
    }
}
