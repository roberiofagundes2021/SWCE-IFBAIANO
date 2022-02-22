@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

  <table class="table table-sm">
    <div>
        <caption>Tabela de Supervisor de Estagiario</caption>
       
    </div>
   
      @foreach ($Supervisor_Estagiario as $supervisor_estagiario)
      <thead>
        <tr>
          <th>nome</th><br>
          <th>Formação</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            

          <td>{{$supervisor_estagiario->nome}}</td>
          <td>{{$supervisor_estagiario->formacao}}</td>
          
             <td>
                   <form action="{{route('Supervisor_Estagiario.delete', ['id' => $supervisor_estagiario->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Supervisor_Estagiario.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Supervisor_Estagiario.edit', ['id' => $supervisor_estagiario->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




