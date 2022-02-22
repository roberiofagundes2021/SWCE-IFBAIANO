@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

  <table class="table table-sm">
    <div>
        <caption>Tabela de funcionario</caption>
       
    </div>
   
      @foreach ($Funcionario as $funcionario)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$funcionario->id}}</td>

          <td>{{$funcionario->nome}}</td>
          
             <td>
                   <form action="{{route('Funcionario.delete', ['id' => $funcionario->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Funcionario.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Funcionario.edit', ['id' => $funcionario->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




