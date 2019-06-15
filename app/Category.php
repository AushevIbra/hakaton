<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
    use SoftDeletes;
    protected $guarded = [];
    protected $with = ['children'];
    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

}
