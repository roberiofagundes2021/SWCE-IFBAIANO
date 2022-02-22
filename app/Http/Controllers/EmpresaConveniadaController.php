<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpresaConveniada;
use App\Models\Estagio;

class EmpresaConveniadaController extends Controller
{
    public function index(){
    $EmpresaConveniada = EmpresaConveniada::all();
    $Estagio = Estagio::all();
     return view('EmpresaConveniada.index',compact('EmpresaConveniada'));
   }
    public function create(){

        $EmpresaConveniada = EmpresaConveniada::get();
        $Estagio = Estagio::get();
        return view('EmpresaConveniada.create',compact('EmpresaConveniada','Estagio'));
    }
    public function edit($id){
        $EmpresaConveniada = EmpresaConveniada::findorFail($id);
        return view('EmpresaConveniada.edit',['EmpresaConveniada'=>$EmpresaConveniada]);
    }
    public function update(Request $request){
        EmpresaConveniada::find($request->id)->update($request->except('_token'));
        return redirect('index/EmpresaConveniada')->with('msg', 'alteração realdizado com sucesso');  
    }
    public function store(){
            $EmpresaConveniada = new EmpresaConveniada();
            $EmpresaConveniada->nome= Request::input('nome');
            $EmpresaConveniada->estagio_id= Request::input('estagio_id');
            $EmpresaConveniada->save();
    }
    public function destroy($id)
    {
      EmpresaConveniada::findorFail($id)->delete();
      return redirect('EmpresaConveniada.index')->with('msg', 'Empresa Conveniada apagada');
    }

   
}
