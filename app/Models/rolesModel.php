<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rolesModel extends Model
{
    protected $table='roles';

    protected $guarded=['id'];

    protected $fillable= ['name','status_id'];

    public $timestamps = false;
}
