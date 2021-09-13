<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriaController extends Controller
{
    public function getCategoria(){
        return response()->json(categoria::all(),200);
    }

    public function getCategoriaxID($id){
        $categoria=categoria::find($id);
        if(isset($categoria)){
            return response()->json($categoria,200);
        }
        return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
    }

    public function setCategoria(Request $request){
        $categoria=categoria::create($request->all());
        return response($categoria,200);
    }

    public function updateCategoria(Request $request,$id){
        $categoria=categoria::find($id);
        if(isset($categoria)){
            $categoria->update($request->all());
            return response($categoria,200);
        }
        return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
    }

    public function deleteCategoria($id){
        $categoria=categoria::find($id);
        if(isset($categoria)){
            $categoria->delete();
            return response()->json(['Mensaje'=>'Eliminado correctamente'],200);
        }
        return response()->json(['Mensaje'=>'Registro no Encontrado'],404);
    }
}
