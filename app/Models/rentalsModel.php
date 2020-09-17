<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rentalsModel extends Model
{
    protected $table='rentals';

    protected $guarded=['id'];

    protected $fillable= ['start_date','end_date','total','user_id','status_id'];

    public $timestamps = false;
}
