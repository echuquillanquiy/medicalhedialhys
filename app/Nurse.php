<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
  protected $fillable = [
     'order_id',
     'patient',
     'room',
     'shift',
     'hcl',
     'frequency',
     'nhd',
     'others',
     'start_pa',
     'end_pa',
     'start_weight',
     'end_weight',
     'machine',
     'brand_model',
     'filter',
     'uf',
     'access1',
     'access2',
     'epo',
     'iron',
     'vitb12',
     'start_observation',
     'end_observation',
     'hr',
     'pa',
     'px',
     'qb',
     'cnd',
     'ra',
     'rv',
     'ptm',
     'obs',

     'hr2',
     'pa2',
     'px2',
     'qb2',
     'cnd2',
     'ra2',
     'rv2',
     'ptm2',
     'obs2',

     'hr3',
     'pa3',
     'px3',
     'qb3',
     'cnd3',
     'ra3',
     'rv3',
     'ptm3',
     'obs3',

     'hr4',
     'pa4',
     'px4',
     'qb4',
     'cnd4',
     'ra4',
     'rv4',
     'ptm4',
     'obs4',

     'hr5',
     'pa5',
     'px5',
     'qb5',
     'cnd5',
     'ra5',
     'rv5',
     'ptm5',
     'obs5',

     'hr6',
     'pa6',
     'px6',
     'qb6',
     'cnd6',
     'ra6',
     'rv6',
     'ptm6',
     'obs6',

     'hr7',
     'pa7',
     'px7',
     'qb7',
     'cnd7',
     'ra7',
     'rv7',
     'ptm7',
     'obs7',

     'hr8',
     'pa8',
     'px8',
     'qb8',
     'cnd8',
     'ra8',
     'rv8',
     'ptm8',
     'obs8',
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
