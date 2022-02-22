<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Professor_Orientador; 
use App\Models\Contato_Professor_Orientador; 
class ContatoProfessorOrientadorController extends Controller
{
    public function index(){
        dd('$request');
    $Contato_Professor_Orientadors = Contato_Professor_Orientador::all();
    return view('Contrato_Professor_Orientador.index',compact('Contato_Professor_Orientadors'));
   }
    public function create(){
        $Contato_Professor_Orientadors = Contato_Professor_Orientador::get();
        $Professor_Orientadors = Professor_Orientador::get();
        return view('Contrato_Professor_Orientador.create',compact('Contato_Professor_Orientadors','Professor_Orientadors'));
    }
    public function edit($id){
        $Contrato_Professor_Orientador = Contato_Professor_Orientador::findorFail($id);
        return view('Contrato_Professor_Orientador.edit',['Contrato_Professor_Orientador'=>$Contrato_Professor_Orientador]);
    }
      public function update(Request $request){
        Contato_Professor_Orientador::find($request->id)->update($request->except('_token'));
        return redirect('index/Contrato_Professor_Orientador')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(Request $request){

            $Contrato_Professor_Orientador = new Contato_Professor_Orientador();
            $Contrato_Professor_Orientador->nome=$request->celular;
            $Contrato_Professor_Orientador->telefone=$request->telefone;
            $Contrato_Professor_Orientador->email=$request->email;
            $Contrato_Professor_Orientador->orientadors_id=$request->orientadors_id;
            $Contrato_Professor_Orientador->timestamps=$request->timestamps;
            $Contrato_Professor_Orientador->save();
    }
    public function destroy($id)
    {
      Contato_Professor_Orientador::findorFail($id)->delete();
      return redirect('Contrato_Professor_Orientador.index')->with('msg', 'Contrato_Professor_Orientador apagada');
    }
 
}
