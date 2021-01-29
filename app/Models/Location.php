<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Workplace;

class Location extends Model
{
    use HasFactory;

    protected function workplace() {
        return $this->hasMany(Workplace::class);
    }
}
