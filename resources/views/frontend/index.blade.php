@extends ('frontend.layaut')

@section ('cabecera')

	@include ('Frontend.sectionFront.video')

@endsection

@section ('content')

	{{-- NOSOTROS --}}
	<div class="col-lg-4 col-md-5 ">
		<img src="{{ asset('images/LogoNezco.svg') }}" alt="">
	</div>

	<div class="col-lg-6 my-lg-0 my-5">
		<h1 class="tit text-lg-left text-center"><b>NOSOTROS</b></h1>
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae autem sapiente nobis libero nostrum aliquam asperiores delectus consequatur tenetur molestias ullam, cumque recusandae veniam harum eum a. Tempora, autem?</div>
		<div>Consequuntur amet eius aut doloremque quam sed, tempora, sapiente officiis possimus, consequatur laudantium nihil vero nulla, explicabo at corrupti aliquid voluptates maxime tenetur praesentium odio fugit recusandae! Cum, natus accusantium!</div>
	</div>

@endsection

@section ('img-float')

	{{-- VALORES --}}
	<div class="container-fluid p-4 p-lg-5  bg-img">
		<div class="container">
			<div class="row ">
				<div class="col-12 text-center"> <h1 class="tit c-white">NUESTROS VALORES</h1></div>
				<div class="col c-white text-center m-1">
					<div class="row justify-content-center">
						<img src="{{ asset('images/responsabilidad.png') }}" alt="">
						<h3 class="col-12 font-italic yellowt">Responsabilidad</h3>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus totam ea eaque nisi delectus neque aut officia incidunt officiis fuga, ipsum soluta nihil corporis reprehenderit odio aliquam nesciunt atque tenetur!</p>
					</div>
				</div>
				<div class="col c-white text-center m-1">
					<div class="row justify-content-center">
						<img src="{{ asset('images/solidaridad.png') }}" alt="">
						<h3 class="col-12 font-italic yellowt">Solidaridad</h3>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus totam ea eaque nisi delectus neque aut officia incidunt officiis fuga, ipsum soluta nihil corporis reprehenderit odio aliquam nesciunt atque tenetur!</p>
					</div>
				</div>
				<div class="col c-white text-center m-1">
					<div class="row justify-content-center">
						<img src="{{ asset('images/innovacion.png') }}" alt="">
						<h3 class="col-12 font-italic yellowt">Innovación</h3>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus totam ea eaque nisi delectus neque aut officia incidunt officiis fuga, ipsum soluta nihil corporis reprehenderit odio aliquam nesciunt atque tenetur!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section ('etc')

	@include ('Frontend.sectionFront.servicios')
	@include ('Frontend.sectionFront.productos')
	@include ('Frontend.sectionFront.twitter')
	@include ('Frontend.sectionFront.clientes')

@endsection