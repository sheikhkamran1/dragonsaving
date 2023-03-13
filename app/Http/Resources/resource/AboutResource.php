<?php

namespace App\Http\Resources\resource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "image" => asset($this->image),
        ];
    }
}
