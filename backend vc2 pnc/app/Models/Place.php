<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'rate', 'location', 'images'];
    

    /**
     * Set the images attribute and encode it to JSON.
     *
     * @param array $value
     * @return void
     */
    public function setImageAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }

    /**
     * Get the images attribute and decode it from JSON.
     *
     * @param string $value
     * @return array
     */
    public function getImageAttribute($value)
    {
        return json_decode($value, true);
    }
}
