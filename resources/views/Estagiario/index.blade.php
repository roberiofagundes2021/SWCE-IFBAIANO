@extends('layouts.estagiario')
@extends('layouts.app')

@section('conteudo')
    <div>
       @section('titulo','Estagiário')
       
    </div>
   <!DOCTYPE html>
       <html>
       <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <title></title>
       </head>
       <body>
       
       </body>
       </html>
       <div class="col">
           <img src="{{URL::asset('imagem/atividade_estagio.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('vagas.index')}}">Cadastrar Atividade de Estagiário</a>
        </div>
        <div class="col">
            <img src="{{URL::asset('imagem/icone_vaga.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('Vagas.create')}}">Vagas de estágio</a>
            
        </div>
        

@endsection('conteudo')






