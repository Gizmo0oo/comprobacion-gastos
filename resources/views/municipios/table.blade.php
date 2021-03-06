<script type="text/template" id="tabla">
	<table class="table table-hover table-condensed table-striped">
		<caption>
			<h1>
				Municipios
				<button class="btn btn-success btn-sm" title="Agregar Municipio" @click="agregar">Agregar</button>
			</h1>
			<div class="navbar-form navbar-right">
				<div class="form-group">
					{{Form::text('buscar', null,['class' => 'form-control', 'placeholder' => 'Buscar...', 'v-model' => 'municipio'])}}
					<button type="submit" class="btn btn-default" @click="buscar">Buscar</button>
				</div>
	        </div>
		</caption>
		<thead>
			<tr>
				<th>Municipio</th><th>Region</th>
			</tr>
		</thead>
		<tbody class="well well-sm">
			<tr v-for="municipio in municipios">
				<td v-text="municipio.nombre"></td>
				<td v-text="municipio.region.nombre"></td>
				<td>
					<div class="btn-group btn-group-sm " role="group">
						<button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar Municipio" @click="editar(municipio)">Editar
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</button>
						<button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Baja Municipio" @click="baja(municipio)">Baja
							<i class="fa fa-trash" aria-hidden="true"></i>
						</button>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</script>