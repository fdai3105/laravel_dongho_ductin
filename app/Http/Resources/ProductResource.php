<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            "desc" => $this->desc,
            "size" => $this->size,
            "price" => $this->price,
            "material" => $this->material,
            "style" => $this->style,
            "waterproof" => $this->waterproof,
            "band_material" => $this->bandMaterial,
            "warranty" => $this->warranty,
            "gender" => $this->gender,
            "discount" => $this->discount,
            "brand" => $this->brand,
            "category" => $this->category,
            "images" => $this->image,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
