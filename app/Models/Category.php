<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function puroducts() {
        return $this->hasMany('App\Models\Product');
    }

    public function major_category() {
        return $this->belongsTo('App\Models\MajorCategory');
    }
}
