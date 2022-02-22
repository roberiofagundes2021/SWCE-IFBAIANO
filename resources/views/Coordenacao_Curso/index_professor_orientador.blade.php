@section('conteudo')
@extends('layouts.coordenacao_curso')
@extends('layouts.app')
    @section('titulo','Coordenação de Curso')
  <table class="table table-sm">
      @foreach ($Professor_Orientador as $professor_orientador)
      <thead>
        <tr>
          <th scope="col">Lista de professores orientadores</th>
          <th scope="col">código</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
            <td scope="row">{{$professor_orientador->id}}</td>
          <td>{{$professor_orientador->nome}}</td>
             <td>
                   <form action="{{route('Professor_orientador.delete', ['id' => $professor_orientador->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Professor_orientador.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Professor_orientador.edit', ['id' => $professor_orientador->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach     
    </table>
@endsection('conteudo')
@section('footer')
@endsection('footer')




