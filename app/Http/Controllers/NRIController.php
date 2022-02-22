<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NRI;
use App\Models\Estagiario;
use App\Models\Estagio;
use App\Models\Curso;
use App\Models\Professor_Orientador;
use App\Models\Supervisor_Estagiario;
class NRIController extends Controller
{
    public function index(){
    $NRI= NRI::all();
    return view('NRI.index',compact('NRI'));
   }
   public function index_estagiario(){
    $Estagiario= Estagiario::all();
    $Estagio= Estagio::all();
    $Curso= Curso::all();
    $Professor_Orientador= Professor_Orientador::all();
    $Supervisor_Estagiario= Supervisor_Estagiario::all();
    return view('NRI.index_estagiario',compact('Estagiario','Estagio','Curso','Professor_Orientador','Supervisor_Estagiario'));
   }
    public function create(){
        $NRI = NRI::get();
        return view('NRI.create');
    }
    public function edit($id){
        $NRI= NRI::findorFail($id);
        return view('NRI.edit',['NRI'=>$NRI]);
    }
    public function update(Request $request){
        NRI::find($request->id)->update($request->except('_token'));
        return redirect('index/NRI')->with('msg', 'alteração realdizado com sucesso');
    }
    public function store(Request $request){
        $NRI = new NRI();
        $NRI->nome=$request->nome;
        $NRI->timestamps=$request->timestamps;
        $NRI->save();
    }
    public function destroy($id)
    {
      NRI::findorFail($id)->delete();
      return redirect('NRI.index')->with('msg', 'NRI apagada');
    }
}
