@extends('layouts.estagiario')
@extends('layouts.app')


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

        <form action="{{route('Estagio.create')}}" method="post">
            <div class="row g-3">
                <h4>cadastro de Estágio</h4><br>
                    @csrf
                    <div class="col">
                         <label for="nome">nome</label><br>
                        <input type="text" class="form-control" name="nome" id="nome">

                        <label for="nome">tipo do estágio </label><br>
                        <input type="text" class="form-control" name="tipo_estagio" id="tipo_estagio">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                    </div>
                    
                    <div class="col">
                           
                        <label>Coordenação de Curso</label>
                        <select class="form-control"  name="nri_id">
                            @foreach($Coordenacao_curso as $coordenacao_curso)  
                                <option value="{{ $coordenacao_curso->coordenacao_curso_id}}"><br>
                                    {{ $coordenacao_curso->nome }}<br>
                                </option>
                            @endforeach                        
                        </select>

                        <label>NRI</label>
                        <select class="form-control"  name="coordenacao_curso_id ">
                            @foreach($NRI as $nri)  
                                <option value="{{ $nri->nri_id}}"><br>
                                    {{ $nri->nome }}<br>
                                </option>
                            @endforeach                        
                        </select>

                       

                </div> 
            </div>                
        </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')