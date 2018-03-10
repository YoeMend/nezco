@extends ('header')
@section('titulo')
   Categoría de Imagen
	<div class="uk-float-right">
	<ul class="uk-iconnav">
	 <li><a href="{{ route('almacen.create') }}" uk-icon="icon: plus-circle"></a></li>
	</ul>
</div>

   @endsection