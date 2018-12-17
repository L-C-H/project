<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    //定义与模型关联的数据表
    protected $table = "goods";
    //主键
    protected $primaryKey = 'id';
    //设置是否需要自动维护时间戳
    public $timestamps = false;
    protected $fillable = ['goods_name','goods_price','goods_des','pic','new','stock','original_price','status'];
    //获取与商品关联的详情信息
    public function info(){
    	return $this->hasOne('App\Models\goodsinfo','g_id');
    }
}
