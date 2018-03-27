@extends ('frontend.layaut')

@section('title', "Leyes -")

@section('tit-cabecera')

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')

	<div class="container">
		<div class="row">

			{{-- BUSCADOR --}}
			<div class="col-lg-12">
					<div class="form-group col-md-4 offset-md-8">
						<form action="">
							<input type="text" class="form-control" placeholder="Buscar">
						</form> 
					</div>
			</div>
			{{-- FIN BUSCADOR --}}

	{{-- ======================
		======================== --}}
	
			{{-- FILTRO --}}
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
							Leyes
								</button>
							</li>

							<li class="nav-item active col-12 col-md-6 col-lg-12 mt-1 px-1">
							   <button class="btn w-100 btn-primary text-left" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
							Normativas
								</button>
							</li>

							<li class="nav-item active col-12 col-md-6 col-lg-12 my-1 px-1">
							   <button class="btn w-100 btn-primary text-left" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
							Antecendentes
								</button>
							</li>

				    	</div>
				    </ul>	   
				  </div>
				</nav>
			</div>
			{{-- FIN FILTRO --}}

	{{-- ======================
		======================== --}}
		
			<div class="col-12 col-md-12 col-lg-10">
				<div class="row">
					{{-- ITEM --}}

					<div class="item-l col-12 col-md-4 pt-3">
						<div class="h-15em overflow-hidden bg-img" style="background-image: url('{{ asset('images/5.jpg') }}');">

							<div class="item-ley">
								<div class="row text-center px-3 pt-5">
									<div class="col">
										<i class="fa fa-download" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-greyClaro rounded-bottom p-3">
							<h5 class="font-italic ">Titiulosdn</h5>
						</div>
					</div>
					
					{{-- FIN ITEM --}}

					<div class="item-l col-12 col-md-4 pt-3">
						<div class="h-15em overflow-hidden bg-img" style="background-image: url('{{ asset('images/5.jpg') }}');">

							<div class="item-ley">
								<div class="row text-center px-3 pt-5">
									<div class="col">
										<i class="fa fa-download" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-greyClaro rounded-bottom p-3">
							<h5 class="font-italic ">Titiulosdn</h5>
						</div>
					</div>
					<div class="item-l col-12 col-md-4 pt-3">
						<div class="h-15em overflow-hidden bg-img" style="background-image: url('{{ asset('images/5.jpg') }}');">

							<div class="item-ley">
								<div class="row text-center px-3 pt-5">
									<div class="col">
										<i class="fa fa-download" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-greyClaro rounded-bottom p-3">
							<h5 class="font-italic ">Titiulosdn</h5>
						</div>
					</div>
					<div class="item-l col-12 col-md-4 pt-3">
						<div class="h-15em overflow-hidden bg-img" style="background-image: url('{{ asset('images/5.jpg') }}');">

							<div class="item-ley">
								<div class="row text-center px-3 pt-5">
									<div class="col">
										<i class="fa fa-download" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-greyClaro rounded-bottom p-3">
							<h5 class="font-italic ">Hay que probar los titulos largos porsiacaso</h5>
						</div>
					</div>
					<div class="item-l col-12 col-md-4 pt-3">
						<div class="h-15em overflow-hidden bg-img" style="background-image: url('{{ asset('images/5.jpg') }}');">

							<div class="item-ley">
								<div class="row text-center px-3 pt-5">
									<div class="col">
										<i class="fa fa-download" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</div>
									<div class="col">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="bg-greyClaro rounded-bottom p-3">
							<h5 class="font-italic ">Titiulosdn</h5>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

@endsection
