<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Instituicao;

class InstituicaoController extends Controller
{
    public function index(){
     $Instituicao  = Instituicao::all();
    return view('Instituicao.index',compact('Instituicao'));
   }
    public function create(){

    $Instituicao = Instituicao::get();
    return view('Instituicao.create',compact('Instituicao'));
    }

    public function edit($id){
        $Instituicao= Instituicao::findorFail($id);
        return view('Instituicao.edit',['Instituicao'=>$Instituicao]);
    }
    public function update(Request $request){
    Instituicao::find($request->id)->update($request->except('_token'));
    return redirect('index/Instituicao')->with('msg', 'alteração realdizado com sucesso');

    }
    public function store(Request $request){
        $Instituicao = new Instituicao();
        $Instituicao->nome=$request->nome;
        $Instituicao->diretor=$request->diretor;
        $Instituicao->CNPJ=$request->CNPJ;
        $Instituicao->timestamps=$request->timestamps;
        $Instituicao->save();
    }
    public function destroy($id)
    {
      Instituicao::findorFail($id)->delete();
      return redirect('Instituicao.index')->with('msg', 'Instituicao apagada');
    }
   
}
