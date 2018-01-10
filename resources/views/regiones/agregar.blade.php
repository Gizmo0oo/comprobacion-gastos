<div class="modal fade" tabindex="-1" role="dialog" id="agregar_region">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar Region</h4>
            </div>
            <div class="modal-body">
                {{Form::open(["class" => "form-horizontal", "role"=>"form"])}}
                    {{Form::label("nombre","Nombre",["class"=>"control-label"])}}
                    {{Form::text("nombre","",["class" => "form-control", "v-model" => "new_region.nombre", "autofocus"])}}
                    {{Form::label("municipio","Municipio",["class"=>"control-label"])}}
                    <select class="form-control" v-model='new_region.municipios_id'>
                        <option v-for="municipio in municipios" :value="municipio.id">
                            @{{municipio.nombre}}
                        </option>
                    </select>
                {{Form::close()}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" @click="agregar_region">Guardar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->