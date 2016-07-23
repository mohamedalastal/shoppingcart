<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductService extends Model
{
    //
    protected $table = 'product_service';
    protected $fillable =['date_reserve','time_reserve','numberofhours','total_amount','product_id'];

     public function protuct()
    {
        return $this->belongsTo('App\Products','product_id','id');
    }
        public function cart()
    {
        return $this->belongsTo('App\Cart','product_id','product_id');
    }   
}
