
@extends('layouts.main')
@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('Atividade_Estagio.update', ['id' => $AtividadeEstagio->id])}}" method="post">
				<h4>atividade de estagio</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome da atividade</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome_atividade" class="form-control" value="{{$AtividadeEstagio->nome_atividade}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')