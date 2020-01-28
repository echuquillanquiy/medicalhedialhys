<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{

    protected $fillable = [
        'patient_id',
        'room_id',
        'shift_id',
        'user_id'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function format006()
    {
        return $this->hasOne(Format006::class)->withDefault();
    }
}
