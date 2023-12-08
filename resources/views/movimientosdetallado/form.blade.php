<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::text('producto_id', $movimientosdetallado->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $movimientosdetallado->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CantidadExistencias') }}
            {{ Form::text('CantidadExistencias', $movimientosdetallado->CantidadExistencias, ['class' => 'form-control' . ($errors->has('CantidadExistencias') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadexistencias']) }}
            {!! $errors->first('CantidadExistencias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $movimientosdetallado->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>