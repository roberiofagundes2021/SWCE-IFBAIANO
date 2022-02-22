
@extends('layouts.NRI')

@section('titulo','NRI -  Núcleo de Relações Institucionais')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('EmpresaConveniada.update', ['id' => $EmpresaConveniada->id])}}" method="post">
				<h4>Edição de Empresa Concedente</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome da empresa concendente</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$EmpresaConveniada->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
			
	
</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')