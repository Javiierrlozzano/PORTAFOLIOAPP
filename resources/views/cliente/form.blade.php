<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('doc') }}
            {{ Form::text('doc', $cliente->doc, ['class' => 'form-control' . ($errors->has('doc') ? ' is-invalid' : ''), 'placeholder' => 'Doc']) }}
            {!! $errors->first('doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $cliente->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $cliente->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre1') }}
            {{ Form::text('nombre1', $cliente->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $cliente->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre2']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $cliente->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>