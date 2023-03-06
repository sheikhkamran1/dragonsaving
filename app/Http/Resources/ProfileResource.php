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
        // return parent::toArray($request);
        // $table->string('name')->nullable();
        //     $table->string('city');
        //     $table->string('street');
        //     $table->string('contact_1');
        //     $table->string('contact_2')->nullable();
        //     $table->string('email');
        //     $table->string('reg_no');
        //     $table->string('logo')->nullable();
        //     $table->string('aniversary_image')->nullable();
        return[
            "id" => $this->id,
            "name" => $this->name,
            "city" => $this->city,
            "street" => $this->street,
            "contact_1" => $this->contact_1,
            "contact_2" => $this->contact_2,
            "email" => $this->email,
            "reg_no" => $this->reg_no,
            "logo" => $this->logo,
            "anniversary_image" => $this->anniversary_image
        ];
    }
}
