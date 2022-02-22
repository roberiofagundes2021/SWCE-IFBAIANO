@extends('layouts.main')
@section('conteudo')

  <table class="table table-sm">
    <div>
        <caption>atividade de estagio</caption>
       
    </div>
   
      @foreach ($AtividadeEstagio as $atividadeestagio)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome da atividade</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$atividadeestagio->id}}</td>

          <td>{{$atividadeestagio->nome_atividade}}</td>
          
             <td>
                   <form action="{{route('Atividade_Estagio.delete', ['id' => $atividadeestagio->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Atividade_Estagio.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('AtividadeEstagio.edit', ['id' => $atividadeestagio->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




