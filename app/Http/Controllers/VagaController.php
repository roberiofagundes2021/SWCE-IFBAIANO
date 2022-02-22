<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estagio;
use App\Models\Vaga;

class VagaController extends Controller
{
    public function index(){
    $Vaga= Vaga::all();
    return view('Vaga.index',compact('Vaga'));
   }
    public function create(){
    $Vaga = Vaga::get();
    $Estagio=Estagio::get();

    return view('Vaga.create',compact('Vaga','Estagio'));
    }

    public function edit($id){
    $Vaga= Vaga::findorFail($id);
    return view('Vaga.edit',['Vaga'=>$Vaga]);
    }

    public function update(Request $request){
    Vaga::find($request->id)->update($request->except('_token'));
    return redirect('index/Vaga')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(Request $request){

        $Vaga = new Vaga();
        $Vaga->descricao=$request->descricao;
        $Vaga->quantidade_vagas=$request->quantidade_vagas;
        $Vaga->estagio_id=$request->estagio_id;
        $Vaga_Estagiario->timestamps=$request->timestamps;
        $Vaga->save();
    }
    public function destroy($id)
    {
      Vaga::findorFail($id)->delete();
      return redirect('Vaga.index')->with('msg', 'Vaga apagada');
    }
}
