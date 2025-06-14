<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'phone' => $this->phone,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'name' => $this->name ?? $this->first_name . ' ' . $this->last_name,
            'nim' => $this->nim,
            'address' => $this->address,
            'role' => $this->role,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'profile_photo_url' => $this->profile_picture
                ? url('api/v1/images/' . $this->profile_picture)
                : null,
        ];
    }
}
