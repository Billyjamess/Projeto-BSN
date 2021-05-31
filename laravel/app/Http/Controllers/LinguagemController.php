<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\linguagem;

class LinguagemController extends Controller
{
    public function getlinguagem() {
        return response()->json(Linguagem::all(), 200);
    }

    public function getlinguagemId($id) {
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)) {
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        return response()->json($Linguagem::find($id), 200);
    }

    public function addLinguagems(Request $request) {
        $Linguagem = Linguagem::create($request->all());
        return response($Linguagem, 201);
    }

    public function updateLinguagem(Request $request, $id) {
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)) {
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->update($request->all());
        return response($Linguagem, 200);
    }

    public function deleteLinguagem(Request $request, $id) {
        $Linguagem = Linguagem::find($id);
        if(is_null($Linguagem)) {
            return response()->json(['message' => 'Linguagem Not Found'], 404);
        }
        $Linguagem->delete();
        return response()->json(null, 204);
    }
}
