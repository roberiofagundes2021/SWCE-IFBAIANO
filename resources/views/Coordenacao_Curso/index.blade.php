@extends('layouts.coordenacao_curso')
@extends('layouts.app')
@section('conteudo')

       @section('titulo','Coordenação de curso')
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
           <img src="{{URL::asset('imagem/orientador.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('PROFESSOR_orientadors.index')}}">Professores Orientadores</a>
        </div>
        <div class="col">
            <img src="{{URL::asset('imagem/icone_vaga.png');}}" style="width:150px; text-align:center; height:100px;"><br> 

           <a href="{{route('Vagas.index')}}">Vagas de estágio</a>
            
        </div>

@endsection('conteudo')

@section('footer')

@endsection('footer')




