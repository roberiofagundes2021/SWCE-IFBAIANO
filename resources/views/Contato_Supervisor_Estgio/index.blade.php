@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

  <table class="table table-sm">
   
   
      @foreach ($Contato_Supervisor_Estgio as $contrato_supervisor_estagio)
      <thead>
        <tr>
          <th scope="col">código</th>
          <th>telefone</th><br>
          <th>celular</th>
          <th>email</th>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$contrato_supervisor_estagio->id}}</td>

              <td>{{$contrato_supervisor_estagio->telefone}}</td>
              <td>{{$contrato_supervisor_estagio->celular}}</td>
              <td>{{$contrato_supervisor_estagio->email}}</td>
              
             <td>
                   <form action="{{route('ContatoSupervisorEstgio.delete', ['id' => $contrato_supervisor_estagio->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('ContatoSupervisorEstgio.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('ContatoSupervisorEstgio.edit', ['id' => $contrato_supervisor_estagio->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




