<?php namespace App\Http\Controllers;
use App\Models\Gestao;
use Illuminate\Http\Request;

class Gestao extends Controller{
    public function listar(Request $request){
        try{
            $query = Gestao::query();


            if($request->filled('nome','materia_prima','data_fabricacao','quantidade','valor')){
                $query->where('nome', 'like', '%'.$request->nome.'%');
                $query->where('materia_prima', '%'.$request->materia_prima.'%');
                $query->where('data_fabricacao', '%'.$request->data_fabricacao.'%');
                $query->where('quantidade', '%'.$request->quantidade.'%');
                $query->where('valor', '%'.$request->valor.'%');
            }
            if($request->filled('num_gestao')){
                $query->where('num_gestao', '%'.$request->num_gestao.'%');
            }
            $gestores = $query->get();
            return response()->json([
                'success' => true,
                'data' => $gestores
            ],200);
        }catch(\Exception $e){
                return response()->json([
                'success'=>false,
                'menssage' => 'Erro no sistema',
                'errors' => $e->getmenssage()
            ],500);
        }
    }
}