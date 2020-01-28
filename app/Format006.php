<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format006 extends Model
{

    protected $fillable = [
        'tracing_id',

        'user_id',

        'unit_dial',
        'nefro_treat',
        'frec',
        'consult_frec',
        'attorney',

        //SEGUNDA PARTE DE FORMATO 006
        'cause_erca',
        'time_predial',
        'access_vsc',
        'date_predl',
        'dp_predl',
        'hemod_dl',
        'acc_vasc_dl',
        'establishment',
        
        //TERCERA PARTE FORMATO 006

        'tpp_acc_cvc',
        'tpp_acc_fav',
        'num_acc_cvc',
        'num_acc_fav',
        'lost_acc_cvc',
        'lost_acc_fav',

        'date_transplant',
        'transplant',

        //TRATAMIENTO 006

        'hia1',
        'frecuency1',
        'hia2',
        'frecuency2',
        'hia3',
        'frecuency3',

        //TABLA DE DATOS FORMATO 006

        'position',
        'month',
        'date_register',
        'type',
        'time',
        'location',
        'carac',
        'dist',
        'start',
        'end',
        'qb',
        'ra',
        'rv',
        'trouble',
        'observation'
    ];

    public function tracing()
    {
        return $this->belongsTo(Tracing::class);
    }
}
