<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrickResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'img' => $this->img_url,
            'length' => $this->length_mm,
            'height' => $this->height_mm,
            'width' => $this->width_mm,
            'is_produced' => $this->is_produced? true : false
        ];
    }
}
