<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Categoria') }}
            {{ Form::text('NombreCategoria', $categoria->NombreCategoria, ['class' => 'form-control' . ($errors->has('NombreCategoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre categoria']) }}
            {!! $errors->first('NombreCategoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('Estado', ['Activo'=>'Activo','Inactivo'=>'Inactivo'],$categoria->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar </button>
    </div>
</div>