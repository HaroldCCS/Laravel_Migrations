<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class moviesModel extends Model
{
    protected $table='movies';

    protected $guarded=['id'];

    protected $fillable= ['name','description','user_id','status_id'];

    public $timestamps = false;
}
