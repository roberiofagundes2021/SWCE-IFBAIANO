


@section('conteudo')
@extends('layouts.professor_orientador')

@extends('layouts.app')
    @section('titulo','Professor Orientador')
  
<div class="col">
            <img src="{{URL::asset('imagem/atividade_estagio.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('atividade_Orientando_professor.index')}}">Atividade de orientando</a>
        </div>
        <div class="col">
            <img src="{{URL::asset('imagem/orientados.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('index.orientandos_professor_orientador')}}">Orientando</a>
            
        </div>
    


@endsection('conteudo')

@section('footer')

@endsection('footer')




