<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    //
     protected $table = 'product_quantity';
     protected $fillable =['quntity','total_amount','product_id'];
    
     public function protuct()
    {
        return $this->belongsTo('App\Products','product_id','id');
    }
    public function cart()
    {
        return $this->belongsTo('App\Cart','type_id','product_id');
    }
}