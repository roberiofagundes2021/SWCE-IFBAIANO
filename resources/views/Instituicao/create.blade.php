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

       
                <form action="{{route('Instituicao.create')}}" method="post">
                @csrf
                 <div class="row g-3">
                    <h4>cadastro de Instituição</h4><br>
                        <div class="col">
                        <label for="nome">nome</label><br>
                        <input type="text" class="form-control" name="nome" id="nome">
                        <label for="nome">diretor </label><br>
                        <input type="text" class="form-control" name="diretor" id="diretor">
                        <label for="CNPJ">CNPJ</label>
                        <input type="text" class="form-control" name="CNPJ" id="nome"><br><br>  

                         <input type="submit" class="btn btn-primary" value="cadastrar">
 
                    </div>
       
                 </div>
                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')