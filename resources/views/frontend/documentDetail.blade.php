@extends ('frontend.layaut')

@section('title', "Leyes -")

@section('tit-cabecera')

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')

	<div class="container">
		<div class="row">
			
			<h2 class="tit">{{ $documentos->nombre }}</h2>
			<p>
				{{ $documentos->descripcion }}
			</p>
		</div>
	</div>

@endsection
