<?php

namespace App\Http\Controllers;
use App\Models\ModelHasRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    
    public function view($id){
        return view('role',compact('id'));
    }
    
    public function create(Request $request)
    {
        $user = $request->user;
        $r = $request->role;
        $modelhasrole = ModelHasRole::where('model_id',$user)->get();
        $n = sizeof($modelhasrole);
        
        

        if($n==0){
            $modelhasrole = new ModelHasRole;
            $modelhasrole->role_id = $request->role;
            $modelhasrole->model_type = "App\Models\User";
            $modelhasrole->model_id = $request->user;
            $modelhasrole->save();
        }
        else{
            if($n==1){
                $users = DB::update('update model_has_roles set role_id= ? where model_id = ?', [$r,$user]);
            }
        }
       
        

    }
}
