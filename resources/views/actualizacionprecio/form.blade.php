<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('protucto_id') }}
            {{ Form::text('protucto_id', $actualizacionprecio->protucto_id, ['class' => 'form-control' . ($errors->has('protucto_id') ? ' is-invalid' : ''), 'placeholder' => 'Protucto Id']) }}
            {!! $errors->first('protucto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrecioActual') }}
            {{ Form::text('PrecioActual', $actualizacionprecio->PrecioActual, ['class' => 'form-control' . ($errors->has('PrecioActual') ? ' is-invalid' : ''), 'placeholder' => 'Precioactual']) }}
            {!! $errors->first('PrecioActual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Utilidad%') }}
            {{ Form::text('Utilidad%', $actualizacionprecio->Utilidad%, ['class' => 'form-control' . ($errors->has('Utilidad%') ? ' is-invalid' : ''), 'placeholder' => 'Utilidad%']) }}
            {!! $errors->first('Utilidad%', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorUtilidad') }}
            {{ Form::text('ValorUtilidad', $actualizacionprecio->ValorUtilidad, ['class' => 'form-control' . ($errors->has('ValorUtilidad') ? ' is-invalid' : ''), 'placeholder' => 'Valorutilidad']) }}
            {!! $errors->first('ValorUtilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrecioPublico') }}
            {{ Form::text('PrecioPublico', $actualizacionprecio->PrecioPublico, ['class' => 'form-control' . ($errors->has('PrecioPublico') ? ' is-invalid' : ''), 'placeholder' => 'Preciopublico']) }}
            {!! $errors->first('PrecioPublico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('OrigenProducto_id') }}
            {{ Form::text('OrigenProducto_id', $actualizacionprecio->OrigenProducto_id, ['class' => 'form-control' . ($errors->has('OrigenProducto_id') ? ' is-invalid' : ''), 'placeholder' => 'Origenproducto Id']) }}
            {!! $errors->first('OrigenProducto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $actualizacionprecio->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>