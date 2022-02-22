@extends('layouts.coordenacao_curso')
@extends('layouts.app')


@section('conteudo')

  <table class="table table-sm">
    <div>
        @section('titulo','Coordenação de curso')

    </div>
      <thead>
          <th>lista de vagas de estágio</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
      </thead>
        
      @foreach ($Vaga as $vaga)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th>quantidade_vagas</th><br>
          <th>estágio</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>

            <td scope="row">{{$vaga->id}}</td>

          <td>{{$vaga->descricao}}</td>
          <td>{{$vaga->quantidade_vagas}}</td>
          <td>{{$vaga->estagio->nome}}</td>

             <td>
                   <form action="{{route('Vagas.delete', ['id' => $vaga->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form>
                </td>
                <td>
                    <form action="{{route('Vagas.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Vagas.edit', ['id' => $vaga->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>

          @endforeach


    </table>





@endsection('conteudo')

@section('footer')

@endsection('footer')




