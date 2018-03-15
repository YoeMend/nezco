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
	
	<header class="navbar">
		<div class="container-fluid expanded-panel">
			<div class="row">
				vs
			</div>
		</div>
	</header>


	
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
