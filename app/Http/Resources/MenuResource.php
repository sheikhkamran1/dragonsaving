<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            "menu_order" => $this->menu_order,
            "url" => $this->url,
            "posts" => PostResource::collection($this->posts)
        ];
    }
}
