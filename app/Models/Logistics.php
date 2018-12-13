<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logistics extends Model
{
    //
    protected $table = 'logistics';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $filladble = ['id','o_id','name','log_id','consignee','log_address'];
}
