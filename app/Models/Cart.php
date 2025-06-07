<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\product;

class Cart extends Model
{
    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

      public function product(){
        return $this->hasOne('App\Models\products', 'id', 'product_id');
    }
}
