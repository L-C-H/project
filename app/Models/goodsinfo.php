<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class goodsinfo extends Model
{
    //定义与模型关联的数据表
    protected $table = "goods_info";
    //主键
    protected $primaryKey = 'id';
    //设置是否需要自动维护时间戳
    public $timestamps = false;
    /**
     * 可以被批量赋值的属性
     *
     */
    protected $fillable = ['color','material','sex','pattern','style','g_id'];
}
