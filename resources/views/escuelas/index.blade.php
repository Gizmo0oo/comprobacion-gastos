@extends('layouts.master')
@section('title','Unidades Operadoras del Gasto')
@section('content')
<div class="row" id="escuelas">
	@include('escuelas.agregar')
	@include('escuelas.editar')
	<div class="col-lg-12 col-md-8 col-sm-4">
		<h1 class="page-header">Unidades Operadoras del Gasto
			<button class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Agregar UOG" @click="mostrar_formulario_agregar_escuela">
				<i class="fa fa-plus"></i>
			</button>
			<input type="text" v-model="escuela" class="form-control" placeholder="Buscar">
		</h1>
		<div class="row">
			<div class="col-lg-12">
				@include('escuelas.table')
			</div>
		</div>
	</div>
</div>
@endsection