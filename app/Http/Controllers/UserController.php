<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ModelHasRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('identifier','1')->get();
        foreach($user as $u){
          $modelhasrole = ModelHasRole::where('model_id',$u->id)->get();
          $n = sizeof($modelhasrole);
          if($n==0){
            $modelhasrole = new ModelHasRole;
            $modelhasrole->role_id = 3;
            $modelhasrole->model_type = "App\Models\User";
            $modelhasrole->model_id = $u->id;
            $modelhasrole->save();
          }
        }
        $users = User::select('users.id' ,'users.name', 'users.email','model_has_roles.role_id')
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->get();
        
        return view('users',compact('users'));
    }
}
