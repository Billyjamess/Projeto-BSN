<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vagas;
use App\linguagem;
use Illuminate\Support\Facades\DB;
class VagasController extends Controller
{
    public function getvagas() {
        $vagas = DB::table('vagas')
        ->join ('linguagems','linguagems.id','=','vagas.id_linguagem')
        ->select('vagas.id','vagas.nome','linguagems.nome as linguagem')
        ->orderBy('linguagems.nome')
        ->get();
        return response($vagas, 201);
    }

    public function getvagasById($id) {
        $vagas = vagas::find($id);
        if(is_null($vagas)) {
            return response()->json(['message' => 'vagas Not Found'], 404);
        }
        return response()->json($vagas::find($id), 200);
    }

    public function addvagas(Request $request) {
        $vagas = vagas::create($request->all());
        return response($vagas, 201);
    }

    public function updatevagas(Request $request, $id) {
        $vagas = vagas::find($id);
        if(is_null($vagas)) {
            return response()->json(['message' => 'vagas Not Found'], 404);
        }
        $vagas->update($request->all());
        return response($vagas, 200);
    }

    public function deletevagas(Request $request, $id) {
        $vagas = vagas::find($id);
        if(is_null($vagas)) {
            return response()->json(['message' => 'vagas Not Found'], 404);
        }
        $vagas->delete();
        return response()->json(null, 204);
    }
}
