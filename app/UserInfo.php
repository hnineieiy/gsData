<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use SoftDeletes;
    protected $table = 'userinfo';
    protected $fillable = ['user_id','user_address','user_phone','user_city','user_township'];
    protected $dates = ['deleted_at'];
}
