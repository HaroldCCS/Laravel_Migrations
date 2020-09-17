<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typestatusesModel extends Model
{
    protected $table='type_statuses';

    protected $guarded=['id'];

    protected $fillable= ['name'];

    public $timestamps = false;
}
