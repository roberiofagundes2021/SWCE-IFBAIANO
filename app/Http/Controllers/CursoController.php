<?php
namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Campus;

class CursoController extends Controller
{
    public function index(){
    $Curso= Curso::all();
    return view('Curso.create',compact('Curso'));
   }
    public function create(){
        $Curso = Curso::get();
        return view('Curso.create');
    }
    public function edit($id){
        $Curso = Curso::findorFail($id);
        return view('Curso.edit',['Curso'=>$Curso]);
    }
    public function update(Request $request){
        Curso::find($request->id)->update($request->except('_token'));
        return redirect('index/Curso')->with('msg', 'alteração realdizado com sucesso'); 
    }
    public function store(Request $request){
            $Curso = new Curso();
            $Curso->nome=$request->nome;
            $Curso->campuses_id =$request->campuses_id ;
            $Curso->timestamps=$request->timestamps;
            $Curso->save();
    }
    public function destroy($id)
    {
      Curso::findorFail($id)->delete();
      return redirect('Curso.index')->with('msg', 'Curso apagada');
    }

   
}
