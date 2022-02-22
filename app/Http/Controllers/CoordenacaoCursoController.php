<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Coordenacao_Curso;
use App\Models\Professor_Orientador;

class CoordenacaoCursoController extends Controller
{
    //
    public function index(){
    $Coordenacao_Curso = Coordenacao_Curso::all();
    return view('Coordenacao_Curso.index',compact('Coordenacao_Curso'));
    }
    public function index_professor_orientador(){
    $Professor_Orientador = Professor_Orientador::all();
    return view('Coordenacao_Curso.index_professor_orientador',compact('Professor_Orientador'));
    }
    public function create(){
        $Coordenacao_Curso = Coordenacao_Curso::get();
        return view('Coordenacao_Curso.create',compact('Coordenacao_Curso'));

    }
    public function edit($id){
        $Coordenacao_Curso = Coordenacao_Curso::findorFail($id);
        return view('Coordenacao_Curso.edit',['Coordenacao_Curso'=>$Coordenacao_Curso]);
    }
    public function update(Request $request){
        Coordenacao_Curso::find($request->id)->update($request->except('_token'));
        return redirect('index/Coordenacao_Curso')->with('msg', 'alteração realdizado com sucesso');    
    }
    public function store(Request $request){

            $Coordenacao_Curso = new Coordenacao_Curso();
            $Coordenacao_Curso->nome=$request->nome;
            $Coordenacao_Curso_Estgio->timestamps=$request->timestamps;
            $Coordenacao_Curso->save();
    }
    public function destroy($id)
    {
      Coordenacao_Curso::findorFail($id)->delete();
      return redirect('Coordenacao_Curso.index')->with('msg', 'Coordenacao_Curso apagada');
    }
}
