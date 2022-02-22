
@extends('layouts.professor_orientador')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('Professor_orientador.update', ['id' => $Professor_Orientador->id])}}" method="post">
				<h4>Edição de professor orientador</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome do Professor Orientador</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Professor_Orientador->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')