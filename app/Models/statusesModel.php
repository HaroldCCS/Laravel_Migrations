<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class statusesModel extends Model
{
    protected $table='statuses';

    protected $guarded=['id'];

    protected $fillable= ['name','type_status_id'];

    public $timestamps = false;
}
