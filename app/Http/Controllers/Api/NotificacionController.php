<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotificacionResource;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use Validator;

class NotificacionController extends Controller
{
   
    public function show($id)
    {
        $notificaciones = Notificacion::where('id_usuario', $id)->get();
    return response([
     'notificaciones'=>NotificacionResource::collection($notificaciones),
     'message'=>'Retrieved Succesfully'],
     200);
    }
   
    public function destroy($id)
    {
        $n = Notificacion::find($id);
        $n->delete();
    }
}
