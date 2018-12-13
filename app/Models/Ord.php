<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ord extends Model
{
    //
    //定义与模型关联的数据表
	protected $table="order";
	//主键
	protected $primaryKey="id";
	//设置是否需要自动维护时间戳 created_at updated_at
	public $timestamps =false;
	/**
	* 可以被批量赋值的属性。
	*
	* @var array
	*/
	 protected $filladble = ['id','u_id','order_id','name','goods_name','goods_pic','order_num','goods_price','price','status'];

    public function getStatusAttribute($value){
    	$status = [0=>'未付款',1=>'已付款',2=>'已发货',3=>'已收货',4=>'待评论',5=>'已评论',6=>'待退款',7=>'已退款'];
    	return $status[$value];
    }

}
