<style>
    
/* Estilo para el cuadro de firma */
.signature-box {
    border: 2px dashed #ccc;
    min-height: 115px; /* Altura mínima del cuadro de firma */
    max-width: 100%; /* Ancho máximo del cuadro de firma */
    max-height: 200px; /* Altura máxima del cuadro de firma */
    overflow: hidden; /* Ocultar partes de la imagen que se desborden */
    margin-bottom: 10px;
    position: relative;
     /* Añade una posición relativa para ajustar la imagen */
}

/* Estilo para la imagen dentro del cuadro de firma */
.signature-box img {
    max-width: 50%; /* Ancho máximo de la imagen */
    max-height: 50%; /* Altura máxima de la imagen */
    display: block; /* Eliminar espacios en blanco alrededor de la imagen */
}
</style>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-6">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Nit') }}
                    {{ Form::text('Nit', $empresa->Nit, ['class' => 'form-control' . ($errors->has('Nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
                    {!! $errors->first('Nit', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('Nombre', $empresa->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Direccion') }}
                    {{ Form::text('Direccion', $empresa->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                    {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    {{ Form::select('Estado', ['Activo'=>'Activo','Inactivo'=>'Inactivo'],$empresa->Estado, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
                    {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            
            
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Telefono') }}
                    {{ Form::text('Telefono', $empresa->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('WhatsApp') }}
                    {{ Form::text('celular', $empresa->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => '+57 Numero']) }}
                    {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Eslogan') }}
                    {{ Form::text('Eslogan', $empresa->Eslogan, ['class' => 'form-control' . ($errors->has('Eslogan') ? ' is-invalid' : ''), 'placeholder' => 'Eslogan']) }}
                    {!! $errors->first('Eslogan', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Logo') }}
                    <div class="signature-box">
                        <img id="frimaPreview" src="/PORTAFOLIO/app/{{$empresa->Logo}}" alt="Vista previa de la firma">
                    </div>
                    <input type="file"  class="form-control" id="Logo" name="Logo" accept="image/*" onchange="previewImage('Logo', 'frimaPreview')">
                   
                    {!! $errors->first('Logo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<script>
    function previewImage(inputId, previewId) {
        var input = document.getElementById(inputId);
        var preview = document.getElementById(previewId);
        var file = input.files[0];
    
        if (file) {
            var reader = new FileReader();
    
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
    
            reader.readAsDataURL(file);
        } else {
            preview.src = ''; // Limpiar la vista previa si no se selecciona un archivo
        }
    }
    previewImage('firma','frimaPreview');
    </script>