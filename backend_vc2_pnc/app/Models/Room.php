<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'room_id',
        'people',
        'price',
        'room_type',
        'status',
        'owner_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function bookingHotel()
    {
        return $this->hasMany(BookingHotel::class);
    }
}
