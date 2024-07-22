<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'profile',
        'user_role',
        'company',
        'booking_id',
        'location',
        'province',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'owner_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    public function bookingHotel()
    {
        return $this->hasMany(BookingHotel::class);
    }
    public function acceptedBookings()
    {
        return $this->hasMany(Booking::class, 'driver_id');
    }
    public function romms()
    {
        return $this->hasMany(Room::class);
    }
    
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }

    public function feedbackRelatedTo()
    {
        return $this->hasMany(Feedback::class, 'related_user_id');
    }
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
