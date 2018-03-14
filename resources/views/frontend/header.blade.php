<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>Nezco</title>
	<meta name="description" content="description">
	<meta name="author" content="Nezco">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Righteous)}}' rel='stylesheet' type='text/css'>
	<link href="{{ asset('plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/xcharts/xcharts.min.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/select2/select2.css')}}" rel="stylesheet">
	<link href="{{ asset('plugins/justified-gallery/justifiedGallery.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style_v2.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/chartist/chartist.min.css') }}" rel="stylesheet">

</head>
<body>
	<!--Start Header-->
	<header class="navbar">
		<div class="container-fluid expanded-panel">
			<div class="row">
				<div id="logo" class="col-xs-12 col-sm-2">
					<a href="{{ route('frontend.index') }}">Nezco</a>
				</div>
				<div id="top-panel" class="col-xs-12 col-sm-10">
					<div class="row">
						<div class="col-xs-8 col-sm-4">
							<div id="search">
							</div>
						</div>
						<div class="col-xs-4 col-sm-8 top-panel-right">

								<li class="dropdown">
									<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
										<div class="avatar">
											<img src="{{ asset('img/avatar.jpg') }}" class="img-circle" alt="avatar" />
										</div>
										<i class="fa fa-angle-down pull-right"></i>
										<div class="user-mini pull-right">
											<span class="welcome">Hola</span>
											<span></span>
										</div>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">
												<i class="fa fa-cog"></i>
												<span>Configurar</span>
											</a>
										</li>
										<li>
											<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												<i class="fa fa-power-off"></i>
												<span>Cerrar sesión</span>
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>											
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--End Header-->
	<!--Start Container-->
	<div id="main" class="container-fluid">
			<!--Start Content-->
			<div id="content" class="col-xs-12 col-sm-10">
				@yield('content')

			</div>
			<!--End Content-->
		</div>
	</div>
	
@yield('javascript')
	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

	<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
	<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('plugins/tinymce/jquery.tinymce.min.js') }}"></script>

	<script src="{{ asset('js/devoops.js') }}"></script>
</body>
</html>
