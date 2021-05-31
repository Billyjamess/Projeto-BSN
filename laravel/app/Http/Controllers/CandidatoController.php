<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\candidato;
class CandidatoController extends Controller
{
    public function getCandidato() {
        $candidato = DB::table('candidatos')
        ->join ('linguagems','linguagems.id','=','candidatos.id_linguagem')
        ->join ('vagas','vagas.id','=','candidatos.id_vagas')
        ->select('candidatos.id','candidatos.nome','candidatos.email','linguagems.nome as linguagem','vagas.nome as vagas')
        ->orderBy('vagas.nome')
        ->orderBy('linguagems.nome')
        ->get();
        return response($candidato, 201);
    }

    public function getCandidatoId($id) {
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)) {
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        return response()->json($Candidato::find($id), 200);
    }

    public function addCandidatos(Request $request) {
        $Candidato = Candidato::create($request->all());
        return response($Candidato, 201);
    }

    public function updateCandidato(Request $request, $id) {
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)) {
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->update($request->all());
        return response($Candidato, 200);
    }

    public function deleteCandidato(Request $request, $id) {
        $Candidato = Candidato::find($id);
        if(is_null($Candidato)) {
            return response()->json(['message' => 'Candidato Not Found'], 404);
        }
        $Candidato->delete();
        return response()->json(null, 204);
    }
}
