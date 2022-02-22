@extends('layouts.NRI')
@extends('layouts.app')
@section('titulo','NRI -  Núcleo de Relações Institucionais')
@section('conteudo')
  <table class="table table-sm">
        <thead>
            <th style="text-align:center;font-size:29px;">
            Lista de empresa conveniada</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>  
        </thead>
      @foreach ($EmpresaConveniada as $empresaconveniada)
      <thead>
        <tr>
          <th scope="col">código</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
            <td scope="row">{{$empresaconveniada->id}}</td>
          <td>{{$empresaconveniada->nome}}</td>
             <td>
                   <form action="{{route('EmpresaConveniada.delete', ['id' => $empresaconveniada->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('EmpresaConveniada.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('EmpresaConveniada.edit', ['id' => $empresaconveniada->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          @endforeach
    </table>
@endsection('conteudo')

@section('footer')

@endsection('footer')




