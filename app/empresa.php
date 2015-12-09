<?php

namespace hotelMoche;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresa extends Model
{
    use SoftDeletes;
    protected $table = 'empresa';
    protected $primaryKey = 'idEmpresa';

    protected $fillable = ['nombre','ruc','telefono','email','contacto','observacion'];
    protected $dates = ['deleted_at'];
}
