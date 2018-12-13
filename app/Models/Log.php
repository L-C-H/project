<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    //定义与模型关联的数据表
	protected $table="logistics";
	//主键
	protected $primaryKey="id";
	//设置是否需要自动维护时间戳 created_at updated_at
	public $timestamps =false;
	/**
	* 可以被批量赋值的属性。
	*
	* @var array
	*/
	protected $fillable = ['id','o_id','name','log_id','consignee','log_address','phone'];

	public function or(){
		return $this->hasOne('App\Models\Ord','l_id');
	}
}
