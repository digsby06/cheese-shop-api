<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CheeseResource extends JsonResource
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
            'type'          => 'cheeses',
            'id'            => (string)$this->id,
            'attributes'    => [
                'product' => $this->product,
                'image' => $this->image,
                'desc' => $this->desc,
                'price' => $this->price,
                'unit' => $this->unit
            ],
        ];
    }
}
