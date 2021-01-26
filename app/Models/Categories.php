<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    public function manyProduct()
    {
        return $this->hasMany('App\Models\Products', 'category_id', 'id');
    }
}
