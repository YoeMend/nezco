<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Nezco-Administración</title>
	<meta name="description" content="description">
	<meta name="author" content="Evgeniya">
	<meta name="keyword" content="keywords">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/style_v2.css')}}" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div id="page-login" class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<div class="box">
					<div class="box-content">
						<div class="text-center">
							<h3 class="page-header">Nezco<br>Sistema de Administración de Contenidos</h3>
						</div>
						<form class="form-group" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
								<label class="control-label">Usuario(E-mail)</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif

							</div>
							<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
								<label class="control-label">Contraseña</label>
								<input type="password" class="form-control" name="password" required="">
								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif								
							</div>
							<div class="text-center">

								<button type="submit" class="btn btn-primary">
									Entrar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
