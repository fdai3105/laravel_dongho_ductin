<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'total' => $this->total,
            'note' => $this->note,
            'user' => $this->user,
            'address' => $this->address,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ];
    }
}
