
@extends('layouts.main')

@section('titulo','SWCE - Sistema de Controle e Gerenciamento de Estágio')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('Estagio.update', ['id' => $Estagio->id])}}" method="post">
				<h4>Edição de Estágio</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Estagio->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="Salvar">
			</form>
 		</div>
    </div>
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')