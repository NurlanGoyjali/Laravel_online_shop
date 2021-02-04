<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
//bular işdemir tezden bax
    public function category()
    {
        return $this->belongsTo(Category::class);
    }






}
