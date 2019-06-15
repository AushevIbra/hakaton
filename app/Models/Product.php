<?php

namespace App\Models;

use App\Category;
use App\Storage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function storage() {
        return $this->hasMany(Storage::class);
    }

    public function category() {
        return $this->hasMany(Category::class);
    }
}
