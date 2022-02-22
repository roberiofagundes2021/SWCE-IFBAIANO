@section('conteudo')
@extends('layouts.professor_orientador')

@extends('layouts.app')
    @section('titulo','Professor Orientador')

<table class="table table-sm">
       
    <thead>
        <th>
           <h4>Lista de Orientando</h4> 
        </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      

    </thead>
      @foreach ($Estagiario as $estagiario)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>



        </tr>
      </thead>
       
            <td scope="row">{{$estagiario->id}}</td>

          <td>{{$estagiario->nome}}</td>
          
             <td>
                   <form action="{{route('Estagiario.delete', ['id' => $estagiario->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Estagiario.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Estagiario.edit', ['id' => $estagiario->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>

    @endsection('conteudo')

@section('footer')

@endsection('footer')
