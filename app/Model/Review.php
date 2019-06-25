<?php

namespace App\Model;

use Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
