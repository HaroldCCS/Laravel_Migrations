<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoriesModel extends Model
{
    protected $table='categories';

    protected $guarded=['id'];

    protected $fillable= ['name','status_id'];

    public $timestamps = false;
}
