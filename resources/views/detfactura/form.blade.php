<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('protucto_id') }}
            {{ Form::text('protucto_id', $detfactura->protucto_id, ['class' => 'form-control' . ($errors->has('protucto_id') ? ' is-invalid' : ''), 'placeholder' => 'Protucto Id']) }}
            {!! $errors->first('protucto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $detfactura->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valorunidad') }}
            {{ Form::text('Valorunidad', $detfactura->Valorunidad, ['class' => 'form-control' . ($errors->has('Valorunidad') ? ' is-invalid' : ''), 'placeholder' => 'Valorunidad']) }}
            {!! $errors->first('Valorunidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorTotal') }}
            {{ Form::text('ValorTotal', $detfactura->ValorTotal, ['class' => 'form-control' . ($errors->has('ValorTotal') ? ' is-invalid' : ''), 'placeholder' => 'Valortotal']) }}
            {!! $errors->first('ValorTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descuento') }}
            {{ Form::text('Descuento', $detfactura->Descuento, ['class' => 'form-control' . ($errors->has('Descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('Descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facturas_id') }}
            {{ Form::text('facturas_id', $detfactura->facturas_id, ['class' => 'form-control' . ($errors->has('facturas_id') ? ' is-invalid' : ''), 'placeholder' => 'Facturas Id']) }}
            {!! $errors->first('facturas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorEvioTotal') }}
            {{ Form::text('ValorEvioTotal', $detfactura->ValorEvioTotal, ['class' => 'form-control' . ($errors->has('ValorEvioTotal') ? ' is-invalid' : ''), 'placeholder' => 'Valoreviototal']) }}
            {!! $errors->first('ValorEvioTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>