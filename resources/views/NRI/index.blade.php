@extends('layouts.NRI')
@extends('layouts.app')
@section('conteudo')
@section('titulo','NRI -  Núcleo de Relações Institucionais')
        <div class="col">
            <img src="{{URL::asset('imagem/empresa_conveniada.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('EmpresaConveniada.index')}}">Empresa conveniada</a>
        </div>
        <div class="col">
            <img src="{{URL::asset('imagem/estagiario.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('Estagiario_NRI.index')}}">Estagiário</a>
            
        </div>

    


@endsection('conteudo')

@section('footer')

@endsection('footer')




