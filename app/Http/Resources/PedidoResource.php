<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
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
            'id_servicio' => $this->id_servicio,
            'monto' =>$this->monto,
            'nombre' =>$this->nombre,
            'ci'=>$this->ci,
            'descripcion_vehiculo'=>$this->descripcion_vehiculo,
            'color_vehiculo'=>$this->color_vehiculo,
            'chapa_vehiculo'=>$this->chapa_vehiculo,
            'estado'=>$this->estado,
            'id_empleado_encargado' =>$this->id_empleado_encargado,
            'created_at' =>$this->created_at
        ];
    }
}
