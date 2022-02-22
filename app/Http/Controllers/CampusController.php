<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Instituicao;
use App\Models\Campus;
class CampusController extends Controller
{
    public function create(){
    $Campus = Campus::get();
    $Instituicaos =Instituicao::get();
        return view('Campus.create',compact('Campus','Instituicaos'));
    }
    public function index(){
    $Campus=Campus::all(); 
    return view('Campus.index',compact('Campus'));
   }
    public function edit($id){
        $Campus = Campus::findorFail($id);
        return view('Campus.edit',['Campus'=>$Campus]);
    }
    public function update(Request $request){
        Campus::find($request->id)->update($request->except('_token'));
        return redirect('index/Campus')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(Request $request){
            $Campus = new Campus();
            $Campus->nome=$request->nome;
            $Campus->diretor=$request->diretor;
            $Campus->instituicao_id=$request->instituicao_id;
            $Campus->timestamps=$request->timestamps;
            $Campus->save();
    }
    public function destroy($id)
    {
      Categoria::findorFail($id)->delete();
      return redirect('Campus.index')->with('msg', 'Campus apagada');
    }
    public function show($id){
        if ($id) {
            $Campus = Campus::where('id',$id)->get();
            }else{
                    $Campus= Campus::all();
                }
                return view('Campus.show',compact('Campus'));}
}
