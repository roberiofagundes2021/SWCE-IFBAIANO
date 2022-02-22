@extends('layouts.estagiario')
@extends('layouts.app')


@section('conteudo')

  <table class="table table-sm">
    <div>
        @section('titulo','Estagiário')

    </div>
   
       <thead>
           <th><h4>lista de vagas de estágio</h4></th>
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
          <th scope="col">código</th>
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


             

          @endforeach


    </table>





@endsection('conteudo')

@section('footer')

@endsection('footer')




