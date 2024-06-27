<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'people',
        'status',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
