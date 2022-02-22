@extends('layouts.estagiario')
@extends('layouts.app')
@section('conteudo')
@section('titulo','Estagiario')

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
                <form action="{{route('Atividade_Estagio.store')}}" method="post">
                @csrf
                <div id="row">
                   
                    <h4>Cadastro de atividade de estágio</h4><br>
                     <label for="nome_atividade">nome da atividade</label><br>
                    <input type="text" class="form-control" name="nome_atividade" id="nome_atividade"><br><br>
                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                    
                </div>
            </div>
        </div>
                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')