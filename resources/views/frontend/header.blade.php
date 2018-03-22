<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="h-100">
<head>
	<meta charset="utf-8">
	<title>Nezco</title>
	<meta name="description" content="description">
	<meta name="author" content="Nezco">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- MAIN FOR BOOTSTRAP --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="h-100 ">
	<div class="container-fluid h-100 p-0">

		<div class=" h-100">
			<nav class="navbar sticky-top navbar-expand-lg navbar-light ">
				<div class="container">
					  {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
					  <button class="navbar-toggler text-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon text-primary"></span>
					  </button>

					  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">

					    <ul class="navbar-nav  mt-2 mt-lg-0 ">
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Nosotros</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link {{-- disabled --}}" href="#">Capacitación</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Suministros</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Leyes</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Galería</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Contacto</a>
					      </li>
					    </ul>
					    {{--  <form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					    </form>  --}}
					  </div>
				</div>
			</nav>
			
			<div class="container sticky-top top-fijo mb-2 ">
				<div class="logo_home col-5 col-lg-2 mt-5">
					<img src="{{ asset('images/LogoNezco.svg') }}" alt="">
				</div>
			</div>

			<div>
				<div class="svg_video"></div>
				<video src="{{ asset('videos/home.mp4') }}" class="video_home"  loop muted preload autoplay poster="{{-- imagen cuando el video tarda en cargar --}}"></video>
			</div>
			
		</div>

		<div class="container-fluid p-5 bg-white box-sh">
			<div class="container py-lg-5 my-lg-5">
				<div class="row justify-content-around align-items-center">
					<div class="col-lg-4 ">
						<img src="{{ asset('images/LogoNezco.svg') }}" alt="">
					</div>

					<div class="col-lg-6 my-lg-0 my-5">
						<h1 class="tit text-lg-left text-center"><b>NOSOTROS</b></h1>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe repudiandae autem sapiente nobis libero nostrum aliquam asperiores delectus consequatur tenetur molestias ullam, cumque recusandae veniam harum eum a. Tempora, autem?</div>
						<div>Consequuntur amet eius aut doloremque quam sed, tempora, sapiente officiis possimus, consequatur laudantium nihil vero nulla, explicabo at corrupti aliquid voluptates maxime tenetur praesentium odio fugit recusandae! Cum, natus accusantium!</div>
					</div>
				</div>
			</div>
		</div>

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

		<div class="container-fluid p-4 p-lg-5 bg-white">
			
				<div class="row my-lg-5">
					<div class="col-12 text-center">
						<h1 class="tit">CAPACITACIÓN Y PERFECCIONAMIENTO DE CAPITAL HUMANO</h1>
					</div>
					<div class="col my-lg-5 m">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">

						    <div class="carousel-item active my-4">
						    	<div class="row align-items-center justify-content-around">
						    		<div class="col-lg-5 col-md-6">
						    			<h3 class="font-italic">Atención de emergencias médicas </h3>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolorem suscipit deserunt reprehenderit, quo molestias ipsum, atque ut, odit perspiciatis labore earum unde porro eveniet, adipisci nihil ab. Aliquid, voluptatibus!</p>
						    			<div class="col text-right">
						    				<a class="font-italic enlaces " href="">Más Información</a>
						    			</div>
						    			
						    			
						    		</div>
						    		<div class="col-lg-5 col-md-6 mt-3 mt-lg-0">
						    			<img class="d-block img-fluid w-100" src="{{ asset('images/1.jpg') }}" alt="First slide">
						    		</div>
						    	</div>
						    </div>

						     <div class="carousel-item my-4">
						      <div class="row align-items-center justify-content-around">
						    		<div class="col-lg-5 col-md-6">
						    			<h3 class="font-italic">Atención de emergencias médicas </h3>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolorem suscipit deserunt reprehenderit, quo molestias ipsum, atque ut, odit perspiciatis labore earum unde porro eveniet, adipisci nihil ab. Aliquid, voluptatibus!</p>
						    			<div class="col text-right">
						    				<a class="font-italic enlaces " href="">Más Información</a>
						    			</div>
						    			
						    			
						    		</div>
						    		<div class="col-lg-5 col-md-6 mt-3 mt-lg-0 ">
						    			<img class="d-block img-fluid" src="{{ asset('images/2.jpg') }}" alt="First slide">
						    		</div>
						    	</div>
						    </div>

						    <div class="carousel-item my-4">
						      <div class="row align-items-center justify-content-around">
						    		<div class="col-lg-5 col-md-6">
						    			<h3 class="font-italic">Atención de emergencias médicas </h3>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dolorem suscipit deserunt reprehenderit, quo molestias ipsum, atque ut, odit perspiciatis labore earum unde porro eveniet, adipisci nihil ab. Aliquid, voluptatibus!</p>
						    			<div class="col text-right">
						    				<a class="font-italic enlaces " href="">Más Información</a>
						    			</div>
						    			
						    			
						    		</div>
						    		<div class="col-lg-5 col-md-6 mt-3 mt-lg-0">
						    			<img class="d-block img-fluid" src="{{ asset('images/3.jpg') }}" alt="First slide">
						    		</div>
						    	</div>
						    </div>

						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="fa fa-angle-left c-black font-weight-bold position-absolute icon-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="fa fa-angle-right c-black font-weight-bold position-absolute icon-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			
		</div>

		<div class="container-fluid p-5 bg-brown">
			<div class="row">
				<div class="col-12 text-center"><h1>PRODUCTOS</h1></div>
				<div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam mollitia incidunt numquam, ad necessitatibus nisi amet officia laborum sint corporis ipsa ab, ullam, beatae quasi. Atque fuga neque unde accusantium!</div>
			</div>
		</div>

		<div class="container-fluid bg-nubes">
			<div class="container p-0">
				<div class="row justify-content-center align-items-center no-gutters py-md-4 py-3">

					<div class="col-md-12  col-lg-6 col-12 text-center ">
						<div class="row justify-content-center ">
							<div class="col-3 col-md-2 mb-lg-4">
								<img class="img-fluid c-white"  src="{{ asset('images/Twitter.svg') }}" alt="">
							</div>
							<div class="col-12">
								<h1 class="c-blue">Siguenos en Twitter</h1>
							<h2><a class="c-vino" href="#">@Nezco</a></h2>
							</div>
						</div>
						
						
					</div>
					<div class="col-12 py-3 col-md-8 col-lg-6  ">
						<a class="twitter-grid" data-limit="4" data-partner="tweetdeck" href="https://twitter.com/AnthoniRodrigu2/timelines/973370227101757440?ref_src=twsrc%5Etfw">Nezco</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

				</div>
			</div>
		</div>

		<div class="container-fluid py-5 bg-white">
			<div class="container p-0">
				<div class="row">
					<div class="col-12 text-center tit"><h1>Nuestros Clientes</h1></div>

					<div class="col-12 col-md-6 my-2">
						
						<video class="video" controls="" src="{{ asset('videos/client1.mp4') }}""></video>
						<p class="font-italic px-2">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas consequuntur consectetur deserunt ea voluptate, quod possimus modi et id magnam reprehenderit eaque deleniti accusantium quam quo maxime. Labore, delectus, ab."</p>
						{{-- <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt=""> --}}
					</div>
					<div class="col-12 col-md-6 my-2">
						<video class="video" controls="" src="{{ asset('videos/client2.mp4') }}""></video>
						<p class="font-italic px-2">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi fuga dolore, quia esse eius deleniti earum temporibus, voluptas. Neque fuga laudantium impedit unde dolorem aliquam excepturi, quasi maxime perspiciatis. Fugit!"</p>
						{{-- <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt=""> --}}
					</div>

				</div>
				<br>
					<div class="col-12 p-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repellendus voluptas autem aperiam tenetur, culpa natus, inventore iste nostrum voluptate magnam distinctio id laudantium illo dicta sapiente aspernatur maiores debitis! lorem*60
					</div>
			</div>
		</div>
		
		<div class="container-fluid p-4 bg-vino">
			<footer>
				<div class="row">
					<div class="col">lorem</div>
					<div class="col align-self-end text-right">lorem</div>
					<div class="col-12 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab similique eligendi at tempore deserunt voluptatem id corporis, repudiandae, ipsam nihil quod voluptate possimus modi, hic suscipit quas culpa repellat cupiditate. </div>
				</div>
			</footer>
		</div>
		
		

	</div>
	

	


@yield('javascript')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('js/plugins/chart.js') }}"></script>
</body>
</html>
