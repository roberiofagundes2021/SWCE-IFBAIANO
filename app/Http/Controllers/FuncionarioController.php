<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NRI;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index(){
    $Funcionario = Funcionario::all();
    return view('Funcionario.index',compact('Funcionario'));
   }
    public function create(){
        $Funcionario = Funcionario:: get();
        $NRI = NRI::get();
        return view('Funcionario.create',compact('Funcionario','NRI'));
    }
    public function edit($id){
        $Funcionario = Funcionario::findorFail($id);
        return view('Funcionario.edit',['Funcionario'=>$Funcionario]);
    }
    public function update(Request $request){
        Funcionario::find($request->id)->update($request->except('_token'));
        return redirect('index/Funcionario')->with('msg', 'alteração realdizado com sucesso');   
    }
    public function store(Request $request){
            $Funcionario = new Funcionario();
            $Funcionario->nome=$request->nome;
            $Funcionario->funcao=$request->funcao;
            $Funcionario->nri_id=$request->nri_id ;
            $Funcionario->timestamps=$request->timestamps;
            $Funcionario->save();
    }
    public function destroy($id)
    {
      Funcionario::findorFail($id)->delete();
      return redirect('Funcionario.index')->with('msg', 'Funcionario apagada');
    }
    
}
