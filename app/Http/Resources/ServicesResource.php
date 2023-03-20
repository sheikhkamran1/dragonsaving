<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
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
            "content" => $this->content,
            "scheme_id" => $this->scheme_id,
            "meta_word" => $this->meta_word,
            "meta_description" => $this->meta_description,
            "featured_image" => asset($this->featured_image),
        ];
    }
}
