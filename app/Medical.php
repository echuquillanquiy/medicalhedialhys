<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $fillable = [
    	'order_id',
        'patient',
        'room',
        'shift',
        'start_weight',
        'start_pa',
        'fc',
        'clinical_trouble',
        'evaluation',
        'indications',
        'hour_hd',
        'heparin',
        'dry_weight',
        'uf',
        'qb',
        'qd',
        'bathroom',
        'temperature',
        'cnd',
        'start_na',
        'end_na',
        'area_filter',
        'membrane',
        'serological',
        'profile_uf',
        'dializer',
        'bircarbonat',
        'na_in_solution'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function scopePatient($query, $patient)
    {
        if($patient)
            return $query->where('patient', 'LIKE', "%$patient%");
    }

    public function scopeRoom($query, $room)
    {
        if($room)
            return $query->where('room', 'LIKE', "%$room%");
    }

    public function scopeShift($query, $shift)
    {
        if($shift)
            return $query->where('shift', 'LIKE', "%$shift%");
    }

    public function scopeCreated_at($query, $created_at)
    {
        if($created_at)
            return $query->where('created_at', 'LIKE', "%$created_at%");
    }
}
