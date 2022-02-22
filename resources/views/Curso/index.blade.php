@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estágio')


@section('conteudo')

  <table class="table table-sm">
     
      @foreach ($categorias as $categoria)
      <thead>
        <tr>
            <th>lista de curso</th>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$categoria->id}}</td>

          <td>{{$categoria->nome}}</td>
          
             <td>
                   <form action="{{route('categoria.delete', ['id' => $categoria->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('categoria.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('categoria.edit', ['id' => $categoria->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')




