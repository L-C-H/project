<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    //
    //定义与模型关联的数据表
	protected $table="announce";
	//主键
	protected $primaryKey="id";
	//设置是否需要自动维护时间戳 created_at updated_at
	public $timestamps =true;
	/**
	* 可以被批量赋值的属性。
	*
	* @var array
	*/
	 protected $filladble = ['id','content','created_at','updated_at','status','title'];

    public function getStatusAttribute($value){
    	$status = [0=>'启用',1=>'禁用'];
    	return $status[$value];
    }
}
