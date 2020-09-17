<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table='users';

    protected $guarded=['id'];

    protected $fillable= ['name','email','password','status_id','role_id'];

    public $timestamps = false;
}
