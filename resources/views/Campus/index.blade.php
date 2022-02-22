@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                
            </div>

        @endif

        <table class="table table-sm">
    <div>
        <caption>Campus</caption>
       
    </div>
   
      @foreach ($Campus as $campus)
      <thead>
        <tr>
          <th scope="col">código</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$campus->id}}</td>

          <td>{{$campus->nome}}</td>
          
             <td>
                   <form action="{{route('Campus.delete', ['id' => $campus->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('Campus.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('Campus.edit', ['id' => $campus->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    

     
            
               
                       
                        
                  
                    

                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')