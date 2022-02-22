@extends('layouts.coordenacao_curso')
@extends('layouts.app')

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

        <div class="row g-3">
            <div class="col">
                <form action="{{route('Professor_orientador.create')}}" method="post">
                @csrf
                <div id="row">
                   
                    <h4>cadastro de professor orientador</h4><br>
                     <label for="nome">nome</label><br>
                    <input type="text" class="form-control" name="nome" id="nome"><br><br>
                    
                      
                    <input type="submit" class="btn btn-primary" value="cadastrar">
                    
                </div>
            </div>
        </div>

     
            
               
                       
                        
                  
                    

                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')