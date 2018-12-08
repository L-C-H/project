<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $filladble = [''];
    //获取与用户关联的详情信息
    public function info(){
    	return $this->hasOne('App\Admin\Models\Userinfo','user_id');
    }
}
