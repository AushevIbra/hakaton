<?php

namespace App;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model {
    protected $guarded = [];

    protected $with = ['products'];
    
    public function products(){
        return $this->hasMany(Product::class);
    }

}
