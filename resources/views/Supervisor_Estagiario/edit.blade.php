
@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('Supervisor_Estagiario.update', ['id' => $Supervisor_Estagiario->id])}}" method="post">
				<h4>Edição de Supervisor de estagiario</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome da categoria</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Supervisor_Estagiario->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')