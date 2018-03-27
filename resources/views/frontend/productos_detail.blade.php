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
						  		<div class="card card-body pt-0">
								    <a id="filter_item" href="">Extintor 1 este es mas largo que otros</a>
								    <a id="filter_item" href="">Extintor 2</a>
								    <a id="filter_item" href="">Extintor 3</a>
								</div>
							</div>

				      </li>

				      <li class="nav-item active col-12 col-md-6 col-lg-12 mt-1 px-1">

					       <button class="btn w-100 btn-primary text-left" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
						Extintores
							</button>
						
							<div class="collapse" id="collapseExample2">
						  		<div class="card card-body pt-0">
								    <a id="filter_item" href="">Extintor 1 este es mas largo que otros</a>
								    <a id="filter_item" href="">Extintor 2</a>
								    <a id="filter_item" href="">Extintor 3</a>
								</div>
							</div>

				      </li>

				      <li class="nav-item active col-12 col-md-6 col-lg-12 my-1 px-1">

					       <button class="btn w-100 btn-primary text-left" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
						Extintores
							</button>
						
							<div class="collapse" id="collapseExample3">
						  		<div class="card card-body pt-0">
								    <a id="filter_item" href="">Extintor 1 este es mas largo que otros</a>
								    <a id="filter_item" href="">Extintor 2</a>
								    <a id="filter_item" href="">Extintor 3</a>
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
						<h1>Este es el nombre de un producto largo</h1>
					</div>

					<div class="col-12 py-3 px-4 border-bottom" >
						<div class="row align-items-center">
							<div class="col-lg-12">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? Eos fugiat earum similique blanditiis illo expedita incidunt aut.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sed assumenda, sit, ea architecto voluptas nam, dolores veritatis earum esse illum id aspernatur, consectetur! Deserunt rerum molestiae dolores ipsam illo!
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laudantium consequuntur, recusandae perferendis minima velit aut quibusdam, quaerat cupiditate, ullam quos doloremque nemo corrupti iste? Rerum suscipit laborum eum sit.
								</p>
								<div class="col mb-3">
									<button class="btn btn-primary mt-2">5 lbs</button>
									<button class="btn btn-primary mt-2">10 lbs</button>
									<button class="btn btn-primary mt-2">15 lbs</button>
								</div>
							</div>
							<div class="col-lg-12">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active">
								    	<div class="row justify-content-center">
								    		<div class="col-12 col-md-6 col-lg-8">
								    			<img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="First slide">
								    		</div>
								    		
								    	</div>
								    </div>
								    <div class="carousel-item ">
								    	<div class="row justify-content-center">
								    		<div class="col-12 col-md-6 col-lg-8">
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
