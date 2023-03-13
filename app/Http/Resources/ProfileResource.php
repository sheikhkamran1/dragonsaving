<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return[
            "id" => $this->id,
            "name" => $this->name,
            "city" => $this->city,
            "street" => $this->street,
            "contact_1" => $this->contact_1,
            "contact_2" => $this->contact_2,
            "email" => $this->email,
            "reg_no" => $this->reg_no,
            "logo" => asset($this->logo),
            "aniversary_image" => asset($this->aniversary_image),
        ];
    }
}
