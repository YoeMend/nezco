<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Nezco</title>
	<meta name="description" content="description">
	<meta name="author" content="Nezco">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	{{-- MAIN FOR BOOTSTRAP --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>
	<div class="container">
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
	</div>
	<div class="container-fluid p-0">
		<video src="{{ asset('videos/home.mp4') }}" class="position-absolute video_home" allowfullscreen loop muted preload autoplay poster="{{-- imagen cuando el video tarda en cargar --}}"></video>
	</div>

	<div class="position-absolute texto">
		{{-- Lorem*50 --}}
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ipsa iste doloremque error repellendus, odio quaerat adipisci voluptatibus, nesciunt itaque, fugit. Minus totam est sint vero sunt nesciunt. Laboriosam, commodi.
	</div>
	<div class="position-">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero eveniet, expedita minima qui ullam consequatur est, saepe vel doloremque aspernatur. Labore sapiente velit ad molestias modi tempora, minus tempore iste.</div>


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
