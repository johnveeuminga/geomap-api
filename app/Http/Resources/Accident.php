<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Accident extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'status'  => $this->status,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
            'images'  => AccidentPhotosResource::collection(($this->photos)),
        ];
    }
}
