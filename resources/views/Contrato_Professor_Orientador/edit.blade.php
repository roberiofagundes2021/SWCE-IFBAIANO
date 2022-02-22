
@extends('layouts.main')

@section('titulo','SCGE - Sistema de Controle e Gerenciamento de Estagio')


@section('conteudo')

<body>
	
		
        
    <form action="{{route('ContatoSupervisorEstgio.update', ['id' => $Contato_Professor_Orientadors->id])}}" method="post">
        <div class="row g-3">
           	<h4>Edição de contato de professor orientador</h4><br>
			<div class="col">
				
				@csrf
				@method('PUT')
				
					<label for="nome">telefone</label>
				{{-- Form Section 1 --}}
				<input type="text" name="telefone" class="form-control" value="{{$Contato_Professor_Orientadors->telefone}}"><br>

				<label for="nome">celular</label>
				<input type="text" name="celular" class="form-control" value="{{$Contato_Professor_Orientadors->celular}}"><br>
				<input type="submit" class="btn btn-primary" value="editar">

			</div>

		<div class="col">
			<label>email</label>
			<input type="text" name="email" class="form-control" value="{{$Contato_Professor_Orientadors->email}}"><br>

				
		</div>

	</div>		
	</form>
 		
   
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')