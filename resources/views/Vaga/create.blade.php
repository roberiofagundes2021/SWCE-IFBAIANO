


@section('conteudo')
@extends('layouts.coordenacao_curso')
@extends('layouts.app')
                    @section('titulo','Coordenação de Curso')
    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                
            </div>

        @endif

        <div class="row g-3">
           
                <form action="{{route('Vagas.store')}}" method="post">
                @csrf
                <div class="row">
                    <h4>Cadastro de vagas</h4><br>
                </div>
                <div class="col">
                    
                     <label for="descricao">Descricao</label><br>
                    <input type="text" class="form-control" name="descricao" id="descricao">
                    <label for="quantidade_vagas">Quantidade de vagas</label><br>
                    <input type="text" class="form-control" name="quantidade_vagas" id="quantidade_vagas">
                </div>
                <div class="col">
                    <label for="estagio_id">Estágio</label><br>
                     <select class="form-control"  name="estagio_id">
                        @foreach($Estagio as $estagio)  
                            <option value="{{ $estagio->estagio_id}}"><br>
                                {{ $estagio->nome }}<br>
                            </option>
                        @endforeach                        
                    </select><br><br>
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </div>
            </div>
        </div>

     
            
               
                       
                        
                  
                    

                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')