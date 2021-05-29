<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class Personnelcontroller extends Controller
{
    //

    public function index() {
        $res = Personnel::all();
        return response()->json([
            "result" => $res
        ]);
    }


    public function show($id) {
        if(Personnel::where("id", $id)->exists()) {
            $personnel = Personnel::findOrFail($id);
            return response()->json([
                "result" => $personnel
            ]);
        } else {
            return response()->json([
                "result" => "Personnel not found"
            ], 404);
        }
    }


    public function store(Request $request) {
        $personnel = new Personnel();

        $personnel->nom = $request->nom;
        $personnel->prenom = $request->prenom;
        $personnel->telephone = $request->telephone;
        $personnel->role_id = $request->role_id;

        $res = $personnel->save();
        return response()->json([
            "result" => $res
        ], 201);
    }


    public function update(Request $request, $id) {
        if(Personnel::where("id", $id)->exists()) {
            $personnel = Personnel::find($id);
            $personnel->nom = $request->nom;
            $personnel->prenom = $request->prenom;
            $personnel->telephone = $request->telephone;
            $personnel->role_id = $request->role_id;
            
            $res = $personnel->update($id);

            return response()->json([
                "result" => $res
            ], 200);
        } else {
            return response()->json([
                "result" => "Personnel not found"
            ], 404);
        }
    }


    public function delete($id) {
        if(Personnel::where("id", $id)->exists()) {
            $res = Personnel::deleted($id);
            return response()->json([
                "result" => $res
            ]);
        } else {
            return response()->json([
                "result" => "Personnel not found"
            ], 404);
        }
    }
    
}
