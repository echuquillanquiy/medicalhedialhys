<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model

{
	protected $fillable = [
		'patient_id',
        'room_id',
        'shift_id',
        'user_id'
	];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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

    public function medical()
    {
        return $this->hasOne(Medical::class)->withDefault();
    }

    public function nurse()
    {
        return $this->hasOne(Nurse::class)->withDefault();
    }
}
