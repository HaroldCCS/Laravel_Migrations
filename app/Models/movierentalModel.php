<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movierentalModel extends Model
{
    protected $table='movie_rental';

    protected $guarded=['id'];

    protected $fillable= ['movie_id','rental_id','price','observations'];

    public $timestamps = false;
}
