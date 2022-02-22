<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supervisor_Estagiario;
use App\Models\Estagiario;

class SupervisorEstagiarioController extends Controller
{
    public function index(){
    $Supervisor_Estagiario= Supervisor_Estagiario::all();
    return view('Supervisor_Estagiario.index',compact('Supervisor_Estagiario'));
   }

    public function create(){
        $Supervisor_Estagiario = Supervisor_Estagiario::get();
        $Estagiario = Estagiario::get();
        return view('Supervisor_Estagiario.create',compact('Estagiario'));
    }
    public function edit($id){
        $Supervisor_Estagiario= Supervisor_Estagiario::findorFail($id);
        return view('Supervisor_Estagiario.edit',['Supervisor_Estagiario'=>$Supervisor_Estagiario]);
    }
    public function update(Request $request){
        Supervisor_Estagiario::find($request->id)->update($request->except('_token'));
        return redirect('index/Supervisor_Estagiario')->with('msg', 'alteração realdizado com sucesso');   
    }
    public function store(Request $request){
        $Supervisor_Estagiario = new Supervisor_Estagiario();
        $Supervisor_Estagiario->nome=$request->nome;
        $Supervisor_Estagiario->formacao=$request->formacao;
        $Supervisor_Estagiario->timestamps=$request->timestamps;
        $Supervisor_Estagiario->save();
    }
    public function destroy($id)
    {
      Supervisor_Estagiario::findorFail($id)->delete();
      return redirect('Supervisor_Estagiario.index')->with('msg', 'Supervisor_Estagiario apagada');
    }
}
