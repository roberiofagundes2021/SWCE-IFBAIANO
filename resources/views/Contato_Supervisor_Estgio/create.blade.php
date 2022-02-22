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

        
        <form action="{{route('ContatoSupervisorEstgio.create')}}" method="post">
            <div class="row g-3">
            
                @csrf
                <h4 align="text-center">contrato do supervisor de estagio</h4><br>
                <div class="col">
                   
                    
                     <label for="nome">telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone">

                     <label for="nome">celular</label>
                    <input type="text" class="form-control" name="celular" id="celular"><br><br>

                     <input type="submit" class="btn btn-primary" value="cadastrar">
                </div>

                <div class="col">
                    <label for="nome">email</label>
                    <input type="text" class="form-control" name="email" id="email">

                    <label>supervisor</label>
                   
                    <select class="form-control"  name="supervisor__estagiarios_id ">
                        @foreach($Supervisor_Estagiarios as $Supervisor_Estagiario)  
                            <option value="{{ $Supervisor_Estagiario->supervisor__estagiarios_id  }}"><br>
                                {{ $Supervisor_Estagiario->nome }}<br>
                            </option>
                        @endforeach                        
                    </select><br>
                
                </div>

                     
                    
                      
                   
                    
           
        
        </div>

     
            
               
            
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')