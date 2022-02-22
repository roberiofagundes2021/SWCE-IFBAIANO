@extends('layouts.professor_orientador')
@extends('layouts.app')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

  <table class="table table-sm">
        <thead>
            <th>lista de atividade orientando</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </thead>
   
      @foreach ($Atividade_Estagio as $atividadeestagio)
      <thead>
        <tr>
          <th scope="col">código</th>
          <th>nome da atividade</th><br>
          <th>estagiário</th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$atividadeestagio->id}}</td>

          <td>{{$atividadeestagio->nome_atividade}}</td>
          <td>{{$atividadeestagio->estagiario->nome}}</td>
          
         
          
          @endforeach
     
     
    </table>


@endsection('conteudo')

@section('footer')

@endsection('footer')




