<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $filladble = ['id','u_id','order_id','name','goods_name','goods_pic','order_num','goods_price','price','status'];

    public function getStatusAttribute($value){
    	$status = [0=>'未付款',1=>'已付款',2=>'已发货',3=>'已收货',4=>'待评论',5=>'已评论',6=>'待退款',7=>'已退款'];
    	return $status[$value];
    }

    public function log(){
    	return $this->hasOne('App\Models\Logistics','o_id');
    }
}
