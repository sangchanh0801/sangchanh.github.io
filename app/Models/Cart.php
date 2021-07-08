<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = ['cart_product_id','cart_order_id','cart_quantity','cart_amount','cart_price','cart_status'];
    protected $primaryKey = 'cart_id';
    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
    public function order(){
        return $this->belongsTo(order::class,'order_id');
    }


}
