@extends ('frontend.layaut')
 
@section('title', "Capacitación -")

@section('tit-cabecera', "CAPACITACIÓN Y PERFECCIONAMIENTO DEL CAPITAL HUMANO")

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row align-items-start">
					<div class="col-lg-12 col-md-6 py-3 px-4 border-bottom" >
						<div class="row align-items-center">
							<div class="col-lg-12 pl-lg-5">
								<h3 class="font-italic pt-3 pt-lg-0 ">{{ $servicio_detail->titulo }}</h3>
								<p>
									{{ $servicio_detail->descripcion }}
								</p>
								<h5>Detalles</h5>
								<p>
									{{ $servicio_detail->detalles }}
								</p>
							</div>
							<div class="col-lg-12">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								    	<div class="row justify-content-center">
								    		<div class="col-12 col-md-6 col-lg-4 pt-1">
								    			<img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="First slide">
								    		</div>
								    		<div class="col-12 col-md-6 col-lg-4 pt-1">
								    			<img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="First slide">
								    		</div>
								    		
								    	</div>
								    </div>
								  </div>
								</div>
							</div>

						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

@endsection
