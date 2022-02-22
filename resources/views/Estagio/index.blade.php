@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estágio')


@section('conteudo')

  <table class="table table-sm">
    <div class="col">
        <h1>Tabela de estágio</h1>       
    </div>
   
      @foreach ($Estagio as $estagio)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$estagio->id}}</td>

          <td>{{$estagio->nome}}</td>
          
             <td>
                   <form action="{{route('Estagio.delete', ['id' => $estagio->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Estagio.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Estagio.edit', ['id' => $estagio->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




