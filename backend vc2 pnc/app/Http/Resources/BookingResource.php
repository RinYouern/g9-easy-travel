<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Vehicle;
use App\Models\User;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $vehicle = $this->vehicle;

        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'user_id' => $this->user_id,
            'vehicle_id' => $this->vehicle_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'total_cost' => $this->total_cost,
            'status' => $this->status,
            'where' => $this->where,
            'quantity' => $this->quantity,
            'driver_id' => $this->driver_id,
            'owner_id' => $vehicle->owner_id,
        ];
    }
}