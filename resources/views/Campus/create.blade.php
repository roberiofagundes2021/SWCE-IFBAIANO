@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')
@section('conteudo')


    <form action="{{route('Campus.store')}}" method="post">
        <div class="row g-3">   
        <h4>campus</h4><br>
             <div class="col">

                @csrf
                <label for="nome">nome</label>
                <input type="text" class="form-control" name="nome" id="nome">

                <label for="diretor">diretor</label>
                <input type="text" class="form-control" name="diretor" id="diretor"><br><br>

                 <input type="submit" class="btn btn-primary" value="cadastrar"><br>
            </div>

            <div class="col">
                <label for="instituicao_id">instituicao</label>
              
                   
                    <select class="form-control"  name="instituicao_id">
                        @foreach($Instituicaos as $Instituicao)  
                            <option value="{{ $Instituicao->instituicao_id}}"><br>
                                {{ $Instituicao->nome }}<br>
                            </option>
                        @endforeach                        
                    </select><br>
                        
            </div>

            
             <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger">
           
                    @foreach($errors->all() as $error)

                        <label>{{$error}}</label>
                    @endforeach
      
                    </div>

                @endif
            </div>
            
    </form>

        

@endsection('conteudo')
@section('footer')

@endsection('footer')