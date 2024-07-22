<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackHotel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'feedback_hotel', 
        'rating',
        'traveler_id', 
        'hotel_id' 
    ];

    public function traveler(){
        return $this->belongsTo(User::class, 'traveler_id');
    }

    public function hotelOwner(){
        return $this->belongsTo(User::class, 'hotel_id');
    }
}
