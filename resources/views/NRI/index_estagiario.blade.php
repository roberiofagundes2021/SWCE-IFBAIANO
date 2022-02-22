@extends('layouts.NRI')
@extends('layouts.app')




@section('conteudo')

       @section('titulo','NRI -  Núcleo de Relações Institucionais')
       
    
    <table class="table table-sm">
        <thead style="text-align:center;font-size:29px;">
            <th>Lista de estagiário</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
    @foreach ($Estagiario as $estagiario)

    <div class="row">

        
        <thead>
        <tr>
          <th scope="col">código</th>
          <th>nome</th><br>
          <th>estagio</th><br>
          <th>curso</th><br>
          <th>professor_orientador</th><br>
          <th>supervisor</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$estagiario->id}}</td>

          <td>{{$estagiario->nome}}</td>
          <td>{{$estagiario->estagio->nome}}</td>
          <td>{{$estagiario->curso->nome}}</td>
          <td>{{$estagiario->professor_orientador->nome}}</td>
          <td>{{$estagiario->supervisor->nome}}</td>

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
    </div><br>
    <table>
   
           

@endsection('conteudo')






