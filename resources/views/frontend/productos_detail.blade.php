@extends ('frontend.layaut')
 
@section('title', "Suministros -")

@section('tit-cabecera', "SUMINISTROS DE EQUIPOS Y SISTEMAS DE SEGURIDAD Y PROTECCIÓN")

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')


	<div class="container">
		<div class="row">


			<div class=" filter col-lg-2 ">

				<nav id="filter" class="navbar navbar-expand-lg navbar-light bg-white p-0">
				  <a class="navbar-brand c-black invisible" id="cg" href="#">Filtros</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				    <ul class="navbar-nav flex-column list-group mr-auto mt-2 mt-lg-0 w-100">
				    	<div class="row">
				      <li class="nav-item active col-12 col-md-6 col-lg-12 mt-1 px-1">

					       <button class="btn w-100 btn-primary text-left" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Extintores
							</button>
						
							<div class="collapse" id="collapseExample">
						  		<div class=" card-body pt-0">
						  			<p><a id="filter_item" href="">Extintor 1 este es mas largo que otros</a></p>
								</div>
							</div>

				      </li>

				   

				    
				      </div>
				     
				    </ul>
				   
				  </div>
				</nav>
			
			</div>
			{{-- Fin Filtro

			Content --}}
			<div class="col-lg-10">
				<div class="row align-items-start">

					<div class="col-12">
						<h1>{{ $productos_detail->titulo }}</h1>
					</div>

					<div class="col-12 py-3 px-4 border-bottom" >
						<div class="row align-items-center">
							<div class="col-lg-12">
								<p>
									{{ $productos_detail->descripcion }}
								</p>
								<div class="col mb-3">
									<button class="btn btn-primary mt-2">{{ $productos_detail->tipo_producto_id }}</button>
								</div>
							</div>
							<div class="col-lg-12">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								    	<div class="row justify-content-center">
								    		<div class="col-12 col-md-6 col-lg-8">
								    			<img class="d-block w-100" src="{{ asset('img/productos/'.$productos_detail->imagen) }}" alt="{{ $productos_detail->titulo }}">
								    		</div>
								    		
								    	</div>
								    </div>
								  {{--   <div class="carousel-item ">
								    	<div class="row justify-content-center">
								    		<div class="col-12 col-md-6 col-lg-8">
								    			<img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="First slide">
								    		</div>
								    		
								    	</div>
								    </div> --}}
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