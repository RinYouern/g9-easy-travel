<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'image',
        'model',
        'year',
        'color',
        'size',
        'price',
        'description',
        'traveler_capacity',
        'owner_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}