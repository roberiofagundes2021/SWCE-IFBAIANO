<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Professor_Orientador;
use App\Models\Estagiario;
use App\Models\Atividade_Estagio;
class ProfessorOrientadorController extends Controller
{
    public function index(){
    $Professor_Orientador= Professor_Orientador::all();
    return view('Professor_Orientador.index',compact('Professor_Orientador'));
   }
   public function index_professor_orientador(){

    $Estagiario= Estagiario::all();
    return view('Professor_Orientador.orientando_index',compact('Estagiario'));
   }
   public function index_atividade_orientando(){

    $Atividade_Estagio= Atividade_Estagio::all();
    return view('Professor_Orientador.Atividade_Orientando',compact('Atividade_Estagio'));

   }

    public function create(){
        $Professor_Orientador = Professor_Orientador::get();
        return view('Professor_Orientador.create',compact('Professor_Orientador'));
    }
    public function edit($id){
        $Professor_Orientador= Professor_Orientador::findorFail($id);
        return view('Professor_Orientador.edit',['Professor_Orientador'=>$Professor_Orientador]);
    }
    public function update(Request $request){
        Professor_Orientador::find($request->id)->update($request->except('_token'));
        return redirect('index/Professor_Orientador')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(Request $request){
            $Professor_Orientador = new Professor_Orientador();
            $Professor_Orientador->nome=$request->nome;
            $Professor_Orientador->timestamps=$request->timestamps;
            $Professor_Orientador->save();
    }
    public function destroy($id)
    {
      Professor_Orientador::findorFail($id)->delete();
      return redirect('Professor_Orientador.index')->with('msg', 'Professor_Orientador apagada');
    }
}
