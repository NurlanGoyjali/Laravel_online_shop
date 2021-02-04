<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
//bular işdemir tezden bax
    protected $appends=[ 'parent' ];

    public function product()
    {

        return $this->hasMany(Product::class);

    }

    public function parent(){

        return $this->belongsTo(Category::class,'parent_id');

    }

    public function child(){

        return $this->hasMany(Category::class,'parent_id');

    }

}
