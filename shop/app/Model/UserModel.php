<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table = 'p_users';
    protected $primaryKey = 'user_id';
    //protected $fillable = "false";
}
