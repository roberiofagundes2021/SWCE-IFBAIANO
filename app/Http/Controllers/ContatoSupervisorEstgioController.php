<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contato_Supervisor_Estgio;
use App\Models\Supervisor_Estagiario;

class ContatoSupervisorEstgioController extends Controller
{
    public function create(){
        $Contato_Supervisor_Estgios =Contato_Supervisor_Estgio::get();
        $Supervisor_Estagiarios =Supervisor_Estagiario::get();
        return view('Contato_Supervisor_Estgio.create',compact('Contato_Supervisor_Estgios','Supervisor_Estagiarios'));
    }
    public function index(){
    $Contato_Supervisor_Estgio = Contato_Supervisor_Estgio::all();
    return view('Contato_Supervisor_Estgio.index',compact('Contato_Supervisor_Estgio'));
   }
    public function edit($id){
        $Contato_Supervisor_Estgio = Contato_Supervisor_Estgio::findorFail($id);
        return view('Contato_Supervisor_Estgio.edit',['Contato_Supervisor_Estgio'=>$Contato_Supervisor_Estgio]);
    }

      public function update(Request $request){
        Contato_Supervisor_Estgio::find($request->id)->update($request->except('_token'));
        return redirect('index/Contato_Supervisor_Estgio')->with('msg', 'alteração realdizado com sucesso');
        
    }
    public function store(Request $request){

            $Contato_Supervisor_Estgio = new Contato_Supervisor_Estgio();
            $Contrato_Professor_Orientador->nome=$request->celular;
            $Contrato_Professor_Orientador->telefone=$request->telefone;
            $Contrato_Professor_Orientador->email=$request->email;
            $Contrato_Professor_Orientador->supervisor__estagiarios_id=$request->supervisor__estagiarios_id ;
            $Contato_Supervisor_Estgio->save();
    }

    public function destroy($id)
    {
      Contato_Supervisor_Estgio::findorFail($id)->delete();
      return redirect('Contato_Supervisor_Estgio.index')->with('msg', 'Contato_Supervisor_Estgio apagada');
    }
}
