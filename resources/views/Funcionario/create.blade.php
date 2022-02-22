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

                <form action="{{route('Funcionario.create')}}" method="post">

                    <div class="row g-3">
                    
                        <div class="col">
                            @csrf
                       
                                <h4>cadastro de funcionario</h4><br>
                                 <label for="nome">nome</label><br>
                                <input type="text" class="form-control" name="nome" id="nome">

                                <label for="nome">funcao</label><br>
                                <input type="text" class="form-control" name="funcao" id="funcao">
                                
                                 <label>NRI</label>
                                    <select class="form-control"  name="nri_id">
                                        @foreach($NRI as $nri)  
                                            <option value="{{ $nri->nri_id}}"><br>
                                                {{ $nri->nome }}<br>
                                            </option>
                                        @endforeach                        
                                    </select><br>

                                  
                                <input type="submit" class="btn btn-primary" value="cadastrar">

                                
                        </div>
                    </div>

            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')