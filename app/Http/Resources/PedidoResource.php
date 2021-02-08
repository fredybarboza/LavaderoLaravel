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
            'nombre'=> $this->nombre,
            'apellido'=> $this->apellido,
            'ci'=> $this->ci,
            'direccion'=> $this->direccion,
            'id'=> $this->id,
            'id_usuario'=> $this->id_usuario,
            'id_vehiculo'=> $this->id_vehiculo,
            'id_servicio' => $this->id_servicio,
            'monto' =>$this->monto,
            'estado'=>$this->estado,
            'id_empleado_encargado' =>$this->id_empleado_encargado,
            'created_at' =>$this->created_at
        ];
    }
}
