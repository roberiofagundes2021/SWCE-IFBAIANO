
@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('Instituicao.update', ['id' => $Instituicao->id])}}" method="post">
				<h4>Edição de Instituição</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome da Instituição</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$Instituicao->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')