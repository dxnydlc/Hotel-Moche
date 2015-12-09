<?php

namespace hotelMoche;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class habitacion extends Model
{
    use SoftDeletes;
    protected $table 		= 'habitacion';
    protected $primaryKey 	= 'idHabitacion';

    protected $fillable 	= ['numero','piso','tipo'];
    protected $dates 		= ['deleted_at'];

    public function getNumeroAtributte()
    {
    	return $this->numero.', '.$this->piso.' '.$this->piso;
    }

    public function getTipoAttribute($valor)
    {
        switch ( $valor ) {
        	case 'Estandar':
        		return 'Estándar';
        		break;
        	# ===============
        		case 'EstandarTV':
        		return 'Estándar con TV';
        		break;
        	# ===============
        		case 'Matrimonial':
        		return 'Matrimonial';
        		break;
        	# ===============
        }
    }
    public function getClaseAttribute($valor)
    {
    	switch ( $valor ) {
        	case 'libre':
        		return 'primary';
        		break;
        	# ===============
        		case 'ocupada':
        		return '-success';
        		break;
        	# ===============
        		case 'preparando':
        		return 'warning';
        		break;
        	# ===============
        }
    }
}
