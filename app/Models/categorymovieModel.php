<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorymovieModel extends Model
{
    protected $table='category_movie';

    protected $guarded=['id'];

    protected $fillable= ['movie_id','category_id'];

    public $timestamps = false;
}
