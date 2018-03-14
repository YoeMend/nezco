@extends ('layouts.header')
@section('content')
<div class="row">
    <div class="col-lg-10">
    @if($notificacion=Session::get('notificacion'))
        <div class="alert alert-success">{{ $notificacion }}</div>
    @endif
    @if($notificacion_error=Session::get('notificacion_error'))
        <div class="alert alert-danger">{{ $notificacion_error }}</div>
    @endif
    </div>
</div>

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a class="ajax-link" href="{{ route('producto.index') }}">Atrás</a></li>
		</ol>
	</div>

</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-table"></i>
					<span>Crear Producto</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" role="form" action="{{ route('producto.store') }}" method="POST">
                 {{ csrf_field() }}
                 	<div class="form-group">
						<label class="col-sm-2 control-label">Código</label>
						<div class="col-sm-6">
							<input type="text" maxlength="10" id="codigo" name="codigo" class="form-control" placeholder="Código" data-toggle="tooltip" data-placement="bottom" title="Código del Producto" required="" maxlength="10">
						</div>
					</div>
                 	<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-6">
							<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" data-toggle="tooltip" data-placement="bottom" title="Código del Producto" required="" maxlength="10">
						</div>
					</div>

					<div class="form-group">
					<label class="col-sm-2 control-label" for="form-styles">Descripción</label>
						<div class="col-sm-10">
						<textarea  name="descripcion" id="descripcion" class="form-control" rows="5" id="wysiwig_full"></textarea>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-4 control-label">Categoría</label>
						<div class="col-sm-6">
							<select id="categoria_producto_id" id="name" class="form-control">	
                                <option value="">Seleccione Categoría</option>
								@foreach($categoriaproducto as $categ)
								<option value="{{ $categ->id}}">{{ $categ->descripcion}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group has-warning has-feedback">
						<label class="col-sm-4 control-label">Multi-imagen</label>
						<div class="col-sm-4">
							<select id="multiimagen" name="multiimagen" class="form-control">	
                                <option value="">Seleccione</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>

					<div class="form-group has-warning has-feedback">
						<label class="col-sm-4 control-label">Público</label>
						<div class="col-sm-4">
							<select id="publico" name="publico" class="form-control">	
                                <option value="">Seleccione</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
					<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-3">
                            <a href="{{ route('producto.index') }}" class="btn btn-default btn-label-left">
                           
                            <span><i class="fa fa-clock-o txt-danger"></i></span>
                                Cancelar
                            </a>
                        </div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Guardar
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

</div>

@endsection