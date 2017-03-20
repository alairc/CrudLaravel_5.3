@extends('layout.site')
@section('titulo','Cursos')

@section('conteudo')
	<div class="container">
		<h3 class="center">Lista de Cursos</h3>
		<div class="row">
			<form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				@include('admin.cursos._forms')

				<button class="btn deep-orange">Salvar</button>
			</form>	

		</div>		
	</div>


@endsection