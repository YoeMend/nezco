<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Nezco - CMS</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
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
				<a href="index.html">Nezco - CMS</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
										
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/avatar.jpg" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenido(a),</span>
										<span>Usuario</span>
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
										<a href="#">
											<i class="fa fa-power-off"></i>
											<span>Cerrar sesión</span>
										</a>
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
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.html" class="ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Inicio</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-table"></i>
						 <span class="hidden-xs">Configurar</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/tables_simple.html">Imágenes</a></li>
						<li><a class="ajax-link" href="ajax/tables_datatables.html">Productos</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Servicios</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Videos</a></li>
						<li><a class="ajax-link" href="ajax/tables_beauty.html">Tipo Productos</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-pencil-square-o"></i>
						 <span class="hidden-xs">Registrar</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/forms_elements.html">Productos</a></li>
						<li><a class="ajax-link" href="ajax/forms_layouts.html">Servicios</a></li>
						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">Empresas</a></li>
						<li><a class="ajax-link" href="ajax/forms_file_uploader.html">Entrevistas</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-picture-o"></i>
						 <span class="hidden-xs">Galeria</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/gallery_simple.html">Simple Gallery</a></li>
						<li><a class="ajax-link" href="ajax/gallery_flickr.html">Flickr Gallery</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">Administrar</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/ui_grid.html">Usuarios</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Buttons</a></li>
						<li><a class="ajax-link" href="ajax/ui_progressbars.html">Progress Bars</a></li>
						<li><a class="ajax-link" href="ajax/ui_jquery-ui.html">Jquery UI</a></li>
						<li><a class="ajax-link" href="ajax/ui_icons.html">Icons</a></li>
					</ul>
				</li>

			</ul>
		</div>

		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="preloader">
			@yield('content')
	  	    @stack('scripts')
					
			</div>
			
		</div>
		<!--End Content-->
	</div>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/justified-gallery/jquery.justifiedGallery.min.js') }}"></script>
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('plugins/tinymce/jquery.tinymce.min.js') }}"></script>

<script src="{{ asset('js/devoops.js') }}"></script>
</body>
</html>
