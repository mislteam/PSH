<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TradeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'amount' =>$this->amount,
            'result' => $this->result,
            'coin' => $this->coin->name,
            'trade_type' => $this->trade_type,
            'percentage' => $this->coin_interest->percentage,
        ];
    }
}
