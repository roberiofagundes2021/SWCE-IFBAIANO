@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

  <table class="table table-sm">
   
   
      @foreach ($Contato_Professor_Orientadors as $Contato_Professor_Orientador)
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
       
           

              <td>{{$Contato_Professor_Orientador->telefone}}</td>
              <td>{{$Contato_Professor_Orientador->celular}}</td>
              <td>{{$Contato_Professor_Orientador->email}}</td>
              
                <td>
                   <form action="{{route('ContatoSupervisorEstgio.delete', ['id' => $Contato_Professor_Orientador->id])}}" method="post">
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
                    <form action="{{route('ContatoSupervisorEstgio.edit', ['id' => $Contato_Professor_Orientador->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




