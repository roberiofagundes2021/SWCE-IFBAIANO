<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Atividade_Estagio;
class AtividadeEstagioController extends Controller
{
    public function index(){
    $AtividadeEstagio = Atividade_Estagio::all();
    return view('AtividadeEstagio.index',compact('AtividadeEstagio'));
   }
    public function create(){
        return view('AtividadeEstagio.create');
        $Estagiarios = Estagiario::get();
        return view('AtividadeEstagio.index',compact('Estagiarios'));
    }
    public function edit($id){
        $AtividadeEstagio = Atividade_Estagio::findorFail($id);
        return view('AtividadeEstagio.edit',['AtividadeEstagio'=>$AtividadeEstagio]);
    }
    public function update(Request $request){
        Atividade_Estagio::find($request->id)->update($request->except('_token'));
        return redirect('AtividadeEstagio/categorias')->with('msg', 'alteração realdizado com sucesso'); 
    }
    public function store(Request $request){
            $AtividadeEstagio = new Atividade_Estagio();
            $AtividadeEstagio->nome_atividade=$request->nome_atividade;
            $AtividadeEstagio->timestamps=$request->timestamps;
            $AtividadeEstagio->save();
    }
    public function destroy($id)
    {
      Categoria::findorFail($id)->delete();
      return redirect('AtividadeEstagio.index')->with('msg', 'AtividadeEstagio apagada');
    }
    public function show($id){
        if ($id) {
            $AtividadeEstagio = Atividade_Estagio::where('id',$id)->get();
            }else{
                    $AtividadeEstagio= Atividade_Estagio::all();
                }
                return view('AtividadeEstagio.show',compact('AtividadeEstagio'));
            
        }
    
}
