@extends('layouts.NRI')
@extends('layouts.app')
@section('conteudo')
@section('titulo','NRI -  Núcleo de Relações Institucionais')
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
                <form action="{{route('EmpresaConveniada.store')}}" method="post">
                @csrf
                <div id="row">
                    <h4>Cadastro de Empresa Conveniada</h4>
                </div>
                 <div id="col">
                     <label for="nome">nome</label><br>
                    <input type="text" class="form-control" name="nome" id="nome">
                    <label for=" estagio_id">estagio_id</label><br>
                    <select class="form-control"  name="orientadors_id ">
                        @foreach($Estagio as $estagio)  
                            <option value="{{ $estagio->estagio_id}}"><br>
                                {{ $estagio->nome }}<br>
                            </option>
                        @endforeach                        
                    </select>
                </div><br>
                    <input type="submit" class="btn btn-primary" value="cadastrar">
                    
                </div>
            </div>
        </div>
                </label>
            </form>
@endsection('conteudo')
@section('footer')
@endsection('footer')