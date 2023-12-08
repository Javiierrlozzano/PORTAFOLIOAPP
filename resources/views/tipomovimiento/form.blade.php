<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('Nombre', $tipomovimiento->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    {{ Form::select('Estado', ['Activo'=>'Activo','Inactivo'=>'Inactivo'],$tipomovimiento->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
           <div class="col-sm-4"> 
            <div class="form-group">
                {{ Form::label('Codigo') }}
                {{ Form::text('Codigo', $tipomovimiento->Codigo, ['class' => 'form-control' . ($errors->has('Codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                {!! $errors->first('Codigo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
           </div>
           <div class="col-sm-3">
            <div class="form-check">
                {{ Form::label('Descuento Existencia') , ['class' => 'form-check-label'] }}
                {{ Form::checkbox('DescuentoExistencia', $tipomovimiento->DescuentoExistencia, ['class' => 'form-control' . ($errors->has('DescuentoExistencia') ? ' is-invalid' : ''), 'placeholder' => 'Descuento existencia']) }}
                {!! $errors->first('DescuentoExistencia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
           </div>
           <div class="col-sm-3">
         
            <div class="form-check">
                {{ Form::label('Añade Existencia'), ['class' => 'form-check-label']}}
                {{ Form::checkbox('AñadeExistencia', $tipomovimiento->AñadeExistencia, ['class' => 'form-control' . ($errors->has('AñadeExistencia') ? ' is-invalid' : ''), 'placeholder' => 'Añade existencia']) }}
                {!! $errors->first('AñadeExistencia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
           </div>
           <div class="col-sm-3">
            <div class="form-check">
                {{ Form::label('Bloquea') , ['class' => 'form-check-label']}}
                {{ Form::checkbox('Bloquea', $tipomovimiento->Bloquea, ['class' => 'form-control' . ($errors->has('Bloquea') ? ' is-invalid' : ''), 'placeholder' => 'Bloquea']) }}
                {!! $errors->first('Bloquea', '<div class="invalid-feedback">:message</div>') !!}
            </div>
           </div>
           <div class="col-sm-3">
            <div class="form-check">
                {{ Form::label('Translado') , ['class' => 'form-check-label']}}
                {{ Form::checkbox('Alertar', $tipomovimiento->Alertar, ['class' => 'form-control' . ($errors->has('Alertar') ? ' is-invalid' : ''), 'placeholder' => 'Alertar']) }}
                {!! $errors->first('Alertar', '<div class="invalid-feedback">:message</div>') !!}
            </div>
           </div>
            
            

           
        </div>
     

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>