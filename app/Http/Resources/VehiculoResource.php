<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehiculoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=> $this->id,
            'id_usuario' => $this->id_usuario,
            'id_categoria' => $this->id_categoria,
            'marca' =>$this->marca,
            'modelo' =>$this->modelo,
            'matricula'=>$this->matricula,
            'color'=>$this->color,
        ];
    }
}
