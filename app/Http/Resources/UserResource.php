<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id_usuario'=> $this->id_usuario,
            'nombre'=> $this->nombre,
            'apellido' => $this->apellido,
            'ci' =>$this->ci,
            'direccion'=>$this->direccion,
            'celular' =>$this->celular,
        ];
    }
}
