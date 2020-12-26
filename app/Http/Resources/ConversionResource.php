<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConversionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'source' => $this->source,
            'destination' => $this->destination,
            'amount' => $this->amount,
            'rate' => $this->rate,
            // 'ip' => $this->ip,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
