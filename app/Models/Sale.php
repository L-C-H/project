<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    //定义与模型关联的数据表
	protected $table="goods";
	//主键
	protected $primaryKey="id";
	//设置是否需要自动维护时间戳 created_at updated_at
	public $timestamps =false;
	/**
	* 可以被批量赋值的属性。
	*
	* @var array
	*/
	// protected $fillable = ['username','password','email','status','token','phone'];
	//修改器的方法
	//对完成的数据(状态 status)做自动处理
	public function getNewAttribute($value){
	$new=[0=>'折扣',1=>'热销',2=>'推荐',3=>'新品'];
		return $new[$value];
	}
}
