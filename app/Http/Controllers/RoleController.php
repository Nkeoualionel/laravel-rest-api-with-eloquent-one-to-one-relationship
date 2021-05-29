<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //

    public function index() {
        $roles = Role::all();
        $res = response()->json([
                "result" => $roles
        ]);

        return $res;
     }


     public function paginate() {
        $res = Role::paginate();
        return response()->json([
            "result" => $res
        ]);
    }


     public function show($id) {
        if(Role::where('id', $id)->exists()) {
            $role = Role::findOrFail($id);
            return response()->json([
                "result" => $role
            ]);
        } else {
            return response()->json([
                "result" => "Role not found"
            ], 404);
        }

     }


     public function store(Request $request) {
        $role = new Role();

        $role->label = $request->label;
        $res = $role->save();
        return response()->json([
            "result" => $res
        ], 201);

    }

     
    public function update(Request $request, $id) {
        if(Role::where('id', $id)->exists()) {
         $role = Role::find($id);
         $role->label = $request->label;
         $res = $role->update();

         return response()->json([
             "result" => $res
         ], 200);
        } else {
            return response()->json([
                "result" => "Role not found"
            ], 404);
        }
    }


    public function delete($id) {
        if(Role::where('id', $id)->exists()) {
            $role = Role::find($id);
            $res = $role->delete();

            return response()->json([
                "result" => $res
            ]);
        }
    }

}
