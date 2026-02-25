<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'paid' => $this->paid,
            'now_due' => $this->now_due,
            'price' => $this->price,
            'updated_at' => date_format($this->updated_at, 'd/m/y')
        ]; 
    }
}
