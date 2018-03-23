@extends ('frontend.layaut')

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')

	{{-- NOSOTROS --}}
	<div class="col-lg-4 col-md-5 ">
		<img src="{{ asset('images/LogoNezco.svg') }}" alt="">
	</div>

	<div class="col-lg-6 my-lg-0 my-5">
		<h1 class="tit text-lg-right text-center"><b>Productos</b></h1>
		
	</div>

@endsection
