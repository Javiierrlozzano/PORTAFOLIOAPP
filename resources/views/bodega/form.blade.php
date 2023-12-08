<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('Nombre', $bodega->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Direccion') }}
                    {{ Form::text('Direccion', $bodega->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                    {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Empresas') }}
                    {{ Form::select('Empresas_id', $empresas,$bodega->Empresas_id, ['class' => 'form-control' . ($errors->has('Empresas_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresas']) }}
                    {!! $errors->first('Empresas_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    {{ Form::select('Estado', ['Activar'=>'Activar','Inactivar'=>'Inactivar'],$bodega->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                    {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
          
            
           
            <div class="col-sm2">
                <div class="form-check">
                    {{ Form::label('TiendaVirtual'),['class' => 'form-check-label' ] }}
                    {{ Form::checkbox('TiendaVirtual', $bodega->TiendaVirtual, ['class' => 'form-control' . ($errors->has('TiendaVirtual') ? ' is-invalid' : ''), 'placeholder' => 'Tiendavirtual']) }}
                    {!! $errors->first('TiendaVirtual', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>  
          
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>