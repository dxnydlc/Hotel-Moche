<?php

namespace hotelMoche;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class registro extends Model
{
    use SoftDeletes;
    protected $table 		= 'registro';
    protected $primaryKey 	= 'idRegistro';

    protected $fillable 	= ['numero','piso','tipo'];
    protected $dates 		= ['deleted_at'];
}
