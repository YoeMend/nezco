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
								<h3 class="font-italic pt-3 pt-lg-0 ">Este es el nombre de un Servicio largo</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, consequuntur ipsum magnam minus, est voluptatum impedit rem, fuga ratione deleniti consectetur? Eos fugiat earum similique blanditiis illo expedita incidunt aut.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi sed assumenda, sit, ea architecto voluptas nam, dolores veritatis earum esse illum id aspernatur, consectetur! Deserunt rerum molestiae dolores ipsam illo!
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id laudantium consequuntur, recusandae perferendis minima velit aut quibusdam, quaerat cupiditate, ullam quos doloremque nemo corrupti iste? Rerum suscipit laborum eum sit. 
									<br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet illum id sint, nostrum consequuntur, voluptatum ab tenetur qui eveniet dicta aliquid, est quos reprehenderit voluptatem ipsum excepturi quam quisquam distinctio.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto esse, voluptatem quis quisquam. Praesentium incidunt atque nisi eos modi repudiandae fugit, consectetur, voluptates aliquid voluptatem expedita cum cumque debitis sunt? 
									<br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus voluptatem libero explicabo et, atque molestias harum rerum sequi rem dicta, odit. Ad iusto, rem sint tempora beatae fuga, accusantium.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A saepe veritatis libero, natus ipsum sed molestiae animi. Magnam asperiores sapiente ut placeat corporis ullam dignissimos numquam, doloribus rem aperiam nesciunt.
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
