



@section('conteudo')
@extends('layouts.coordenacao_curso')
@extends('layouts.app')


<body>
	@section('titulo','coordenacao de curso')
	<div class="row g-3">
		<div class="row">
			<h4>Edição de vagas</h4>
		</div>
        <div class="col">
           	<form action="{{route('Vagas.update', ['id' => $Vaga->id])}}" method="post">
				@csrf
				@method('PUT')

					<label for="nome">Descrição</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Vaga->descricao}}">

				<label for="quantidade_vagas">Quantidade de vagas</label><br>
                    <input type="text" class="form-control" name="quantidade_vagas" id="quantidade_vagas" value="{{$Vaga->quantidade_vagas}}"><br>
				<input type="submit" class="btn btn-primary" value="Salvar">
			</form>
 		</div>
    </div>











</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')
