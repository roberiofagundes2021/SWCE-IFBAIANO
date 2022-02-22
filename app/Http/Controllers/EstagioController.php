<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estagio;
use App\Models\Coordenacao_Curso;
use App\Models\NRI;

class EstagioController extends Controller
{
    public function index(){
    $Estagio = Estagio::all();
    return view('Estagio.index',compact('Estagio'));
   }
    public function create(){
    $Estagio = Estagio::get();
    $Coordenacao_curso = Coordenacao_Curso::get();
    $NRI = NRI::get();
    return view('Estagio.create',compact('Estagio','Coordenacao_curso','NRI'));
    }
    public function edit($id){
        $Estagio = Estagio::findorFail($id);
        return view('Estagio.edit',['Estagio'=>$Estagio]);
    }
      public function update(Request $request){
        Estagio::find($request->id)->update($request->except('_token'));
        return redirect('index/Estagio')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(Request $request){
            $Estagio = new Estagio();
            $Estagio->nome=$request->nome;
            $Estagio->tipo_estagio=$request->tipo_estagio;
            $Estagio->coordenacao_curso_id=$request->coordenacao_curso_id;
            $Estagio->nri_id=$request->nri_id;
            $Estagio->timestamps=$request->timestamps;
            $Estagio->save();
    }

    public function destroy($id)
    {
      Estagio::findorFail($id)->delete();
      return redirect('Estagio.index')->with('msg', 'Estagio apagada');
    }
}
