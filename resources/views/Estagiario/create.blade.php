@extends('layouts.estagiario')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estágio')


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

    <form action="{{route('Estagiario.store')}}" method="post">
        
        @csrf
        <div class="row g-3">
            <h4>cadastro de estagiário</h4><br>
                <div class="col">
                   
                    <label for="nome">nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">

                         <label>estagio</label>
                       
                        <select class="form-control"  name="estagio_id  ">
                            <option>selecione</option>
                             @foreach($Estagio as $estagio)  
                            <option value="{{ $estagio->estagio_id}}"><br>
                                {{ $estagio->nome }}<br>
                            </option>
                        @endforeach                     
                        </select><br>

                        
                         <input type="submit" class="btn btn-primary" value="cadastrar">
                        
                </div>
    
                    
                <div class="col">
                    <label>orientador</label>
                    <select class="form-control"  name="orientadors_id ">
                        <option>selecione</option>
                        @foreach($Professor_Orientador as $professor_orientador)  
                            <option value="{{ $professor_orientador->professor_orientador_id}}"><br>
                                {{ $professor_orientador->nome }}<br>
                            </option>
                        @endforeach                        
                    </select>

                     <label>curso</label>
                   
                    <select class="form-control"  name="curso_id ">
                        <option>selecione</option>
                        @foreach($Curso as $curso)  
                            <option value="{{ $curso->curso_id  }}"><br>
                                {{ $curso->nome }}<br>
                            </option>
                        @endforeach                        
                    </select>

                     <label>supervisor</label>
                   
                    <select class="form-control"  name="supervisor_estagiario_id ">
                        <option>selecione</option>
                        @foreach($Supervisor_Estagiario as $supervisor_estagiario)  
                            <option value="{{ $supervisor_estagiario->supervisor_estagiario_id  }}"><br>
                                {{ $supervisor_estagiario->nome }}<br>
                            </option>
                        @endforeach                        
                    </select>
                
                </div>
                    
                    
        </div>



    </form>
        

                
@endsection('conteudo')

@section('footer')

@endsection('footer')