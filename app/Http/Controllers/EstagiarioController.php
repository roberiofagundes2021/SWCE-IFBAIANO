<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estagiario;
use App\Models\Estagio;
use App\Models\Curso;
use App\Models\Professor_Orientador;
use App\Models\Supervisor_Estagiario;
use App\Models\Vaga;
class EstagiarioController extends Controller
{
    public function index(){
    $Estagiario = Estagiario::all();
     return view('Estagiario.index',compact('Estagiario'));
   }
   public function index_vagas(){
    $Vaga = Vaga::all();
     return view('Estagiario.vagas',compact('Vaga'));
   }
    public function create(){
        $Estagiario = Estagiario::get();
        $Estagio = Estagio::get();
        $Curso = Curso::get();
        $Professor_Orientador = Professor_Orientador::get();
        $Supervisor_Estagiario = Supervisor_Estagiario::get();
        return view('Estagiario.create',compact('Estagiario','Estagio','Curso','Professor_Orientador','Supervisor_Estagiario'));
    }
    public function edit($id){
        $Estagiario = Estagiario::findorFail($id);
        return view('Estagiario.edit',['Estagiario'=>$Estagiario]);
    }
    public function update(Request $request){
        Estagiario::find($request->id)->update($request->except('_token'));
        return redirect('index/Estagiario')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(){
            $Estagiario = new Estagiario();
            $Estagiario->nome= Request::input('nome');
            $Estagiario->estagio_id= Request::input('estagio_id');
            $Estagiario->curso_id= Request::input('curso_id');
            $Estagiario->professor_orientador_id= Request::input('professor_orientador_id');
            $Estagiario->supervisor_estagiario_id= Request::input('supervisor_estagiario_id');
            $Estagiario->timestamps=$request->timestamps;
            $Estagiario->save();
    }
    public function destroy($id)
    {
      Estagiario::findorFail($id)->delete();
      return redirect('Estagiario.index')->with('msg', 'Estagiario apagada');
    }
}
