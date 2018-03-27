@extends ('frontend.layaut')
 
@section('title', "Suministros -")

@section('tit-cabecera', "SUMINISTROS DE EQUIPOS Y SISTEMAS DE SEGURIDAD Y PROTECCIÓN")

@section ('cabecera')
	@include ('frontend.cabecera')
@endsection

@section ('content')


	<div class="container">
		<div class="row">

			<div class="col-lg-12">
					<div class="form-group col-md-6 offset-md-6 p-0">
						<form action="">
							<input type="text" class="form-control" placeholder="Buscar">
						</form> 
					</div>
			</div>

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
		<div class="col p-0 m-0">		
			<div class="cards">
				{{-- TARJETA --}}	
				<div class="card">
					<div class="py-2 border-bottom">
						<img src="{{ asset('images/1.jpg') }}" alt="" class="img-fluid">
						<div class="">
							<h3 class="font-italic pt-3 pt-lg-0 ">Este es el nombre de un producto largo</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? Eos fugiat earum similique blanditiis illo expedita incidunt aut.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sed assumenda, sit, ea architecto voluptas nam, dolores veritatis earum esse illum id aspernatur, consectetur! Deserunt rerum molestiae dolores ipsam illo!
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laudantium consequuntur, recusandae perferendis minima velit aut quibusdam, quaerat cupiditate, ullam quos doloremque nemo corrupti iste? Rerum suscipit laborum eum sit.
							</p>
							<button class="btn btn-primary mt-2">5 lbs</button>
							<button class="btn btn-primary mt-2">10 lbs</button>
							<button class="btn btn-primary mt-2">15 lbs</button>

							<div class="col text-right pt-3 ">
					   			<a class="font-italic enlaces " href="productos_detail">Ver más</a>
					    	</div>
						</div>
					</div>
	    		</div>
	    		{{-- FIN TARJETA --}}
	    		<div class="card">
					<div class="py-2 border-bottom">
						<img src="{{ asset('images/5.jpg') }}" alt="" class="img-fluid">
						<div class="">
							<h3 class="font-italic pt-3 pt-lg-0 ">Este es el nombre de un producto largo</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? Eos fugiat earum similique blanditiis illo expedita incidunt aut.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</p>
							<button class="btn btn-primary mt-2">5 lbs</button>
							<button class="btn btn-primary mt-2">10 lbs</button>
							<button class="btn btn-primary mt-2">15 lbs</button>

							<div class="col text-right pt-3 ">
					   			<a class="font-italic enlaces " href="productos_detail">Ver más</a>
					    	</div>
						</div>

					</div>
	    		</div>
	    		<div class="card">
					<div class="py-2 border-bottom">
						<img src="{{ asset('images/3.jpg') }}" alt="" class="img-fluid">
						<div class="">
							<h3 class="font-italic pt-3 pt-lg-0 ">Este es el nombre de un producto largo</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? Eos fugiat earum similique blanditiis illo expedita incidunt aut.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sed assumenda, sit, ea architecto voluptas nam, dolores veritatis earum esse illum id aspernatur, consectetur! Deserunt rerum molestiae dolores ipsam illo!
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laudantium consequuntur, recusandae perferendis minima velit aut quibusdam, quaerat cupiditate, ullam quos doloremque nemo corrupti iste? Rerum suscipit laborum eum sit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt facilis rerum, impedit ut commodi, ab laborum molestiae, ad, ducimus nihil minima numquam deserunt in culpa tempora. Nostrum eum nisi quasi.
							</p>
							<button class="btn btn-primary mt-2">5 lbs</button>
							<button class="btn btn-primary mt-2">10 lbs</button>
							<button class="btn btn-primary mt-2">15 lbs</button>

							<div class="col text-right pt-3 ">
					   			<a class="font-italic enlaces " href="productos_detail">Ver más</a>
					    	</div>
						</div>

					</div>
	    		</div>
	    		<div class="card">
					<div class="py-2 border-bottom">
						<img src="{{ asset('images/2.jpg') }}" alt="" class="img-fluid">
						<div class="">
							<h3 class="font-italic pt-3 pt-lg-0 ">Este es el nombre de un producto largo</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? 
							</p>
							<button class="btn btn-primary mt-2">5 lbs</button>
							<button class="btn btn-primary mt-2">10 lbs</button>
							<button class="btn btn-primary mt-2">15 lbs</button>

							<div class="col text-right pt-3 ">
					   			<a class="font-italic enlaces " href="productos_detail">Ver más</a>
					    	</div>
						</div>

					</div>
	    		</div>
	  		</div>	
		</div>			
	</div>
</div>

	<script src="{{ asset('js/minigrid.min.js') }}"></script>
	<script>

    (function(){
  		var grid;
  		function init() {
		    grid = new Minigrid({
		      container: '.cards',
		      item: '.card',
		      gutter: 18
		    });
		    grid.mount();
		}
  
	  // mount
	  function update() {
	    grid.mount();
	  }

	document.addEventListener('DOMContentLoaded', init);
	window.addEventListener('resize', update);

	})();

	</script>
@endsection
