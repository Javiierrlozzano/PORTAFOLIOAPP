<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NumeroFactura') }}
            {{ Form::text('NumeroFactura', $factura->NumeroFactura, ['class' => 'form-control' . ($errors->has('NumeroFactura') ? ' is-invalid' : ''), 'placeholder' => 'Numerofactura']) }}
            {!! $errors->first('NumeroFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valortotal') }}
            {{ Form::text('Valortotal', $factura->Valortotal, ['class' => 'form-control' . ($errors->has('Valortotal') ? ' is-invalid' : ''), 'placeholder' => 'Valortotal']) }}
            {!! $errors->first('Valortotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $factura->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('MedioPago') }}
            {{ Form::text('MedioPago', $factura->MedioPago, ['class' => 'form-control' . ($errors->has('MedioPago') ? ' is-invalid' : ''), 'placeholder' => 'Mediopago']) }}
            {!! $errors->first('MedioPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorEvio') }}
            {{ Form::text('ValorEvio', $factura->ValorEvio, ['class' => 'form-control' . ($errors->has('ValorEvio') ? ' is-invalid' : ''), 'placeholder' => 'Valorevio']) }}
            {!! $errors->first('ValorEvio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clientes_id') }}
            {{ Form::text('Clientes_id', $factura->Clientes_id, ['class' => 'form-control' . ($errors->has('Clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
            {!! $errors->first('Clientes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa_id') }}
            {{ Form::text('Empresa_id', $factura->Empresa_id, ['class' => 'form-control' . ($errors->has('Empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('Empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contactos_id') }}
            {{ Form::text('contactos_id', $factura->contactos_id, ['class' => 'form-control' . ($errors->has('contactos_id') ? ' is-invalid' : ''), 'placeholder' => 'Contactos Id']) }}
            {!! $errors->first('contactos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>