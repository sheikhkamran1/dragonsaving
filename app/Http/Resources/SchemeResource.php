<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchemeResource extends JsonResource
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
            "name" => $this->name,
            "slug" => $this->slug,
            "menu_id" => $this->menu_id,
            "services" => ServicesResource::collection($this->services)
        ];
    }
}
