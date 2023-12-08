<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Consecutivo') }}
            {{ Form::text('Consecutivo', $movimiento->Consecutivo, ['class' => 'form-control' . ($errors->has('Consecutivo') ? ' is-invalid' : ''), 'placeholder' => 'Consecutivo']) }}
            {!! $errors->first('Consecutivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idEntrada') }}
            {{ Form::text('idEntrada', $movimiento->idEntrada, ['class' => 'form-control' . ($errors->has('idEntrada') ? ' is-invalid' : ''), 'placeholder' => 'Identrada']) }}
            {!! $errors->first('idEntrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Origen') }}
            {{ Form::text('Origen', $movimiento->Origen, ['class' => 'form-control' . ($errors->has('Origen') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('Origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Destino') }}
            {{ Form::text('Destino', $movimiento->Destino, ['class' => 'form-control' . ($errors->has('Destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('Destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CodigoMovimiento') }}
            {{ Form::text('CodigoMovimiento', $movimiento->CodigoMovimiento, ['class' => 'form-control' . ($errors->has('CodigoMovimiento') ? ' is-invalid' : ''), 'placeholder' => 'Codigomovimiento']) }}
            {!! $errors->first('CodigoMovimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CreadorMovimiento_id') }}
            {{ Form::text('CreadorMovimiento_id', $movimiento->CreadorMovimiento_id, ['class' => 'form-control' . ($errors->has('CreadorMovimiento_id') ? ' is-invalid' : ''), 'placeholder' => 'Creadormovimiento Id']) }}
            {!! $errors->first('CreadorMovimiento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Actualizacion_id') }}
            {{ Form::text('Actualizacion_id', $movimiento->Actualizacion_id, ['class' => 'form-control' . ($errors->has('Actualizacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Actualizacion Id']) }}
            {!! $errors->first('Actualizacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoMovimiento') }}
            {{ Form::text('TipoMovimiento', $movimiento->TipoMovimientos, ['class' => 'form-control' . ($errors->has('TipoMovimiento') ? ' is-invalid' : ''), 'placeholder' => 'Tipomovimiento']) }}
            {!! $errors->first('TipoMovimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $movimiento->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios1') }}
            {{ Form::text('Comentarios1', $movimiento->Comentarios1, ['class' => 'form-control' . ($errors->has('Comentarios1') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios1']) }}
            {!! $errors->first('Comentarios1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios2') }}
            {{ Form::text('Comentarios2', $movimiento->Comentarios2, ['class' => 'form-control' . ($errors->has('Comentarios2') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios2']) }}
            {!! $errors->first('Comentarios2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>