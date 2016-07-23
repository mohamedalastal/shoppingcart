<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //   
     protected $table = 'products';
     protected $fillable =['name','type','image','note','price'];


 
     public function cart()
    {
        return $this->hasMany('App\Cart');
    }
    public function quantity()
    {
        return $this->hasMany('App\ProductQuantity');
    }
    public function service()
    {
        return $this->hasMany('App\ProductService','id','product_id');
    }
}
