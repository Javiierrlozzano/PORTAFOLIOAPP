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
            <div class="col-sm-12">
                <div class="form-group">
                    {{ Form::label('Imagen') }}
                    <div class="signature-box">
                        <img id="frimaPreview" src="/PORTAFOLIO/app/{{$producto->Imagen}}" alt="FOTO PRINCIPAL">
                    </div>
                    <input type="file"  class="form-control" id="Imagen" name="Imagen" accept="image/*" onchange="previewImage('Imagen', 'frimaPreview')">
                    {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <button i="" class="btn btn-success text-center" data-toggle="collapse" href="#detallepc" role="button" aria-expanded="false" aria-controls="detallepc">Agregar mas imagenes </button>
                <hr class="new-section-xs">
            </div>
            
            <div class="collapse" id="detallepc">
            <div class="col-sm-12">
                
                
                <div class="form-group"+>
                    {{ Form::label('Imagen 2') }}
                    <div class="signature-box">
                        <img id="Imagen2p" src="/PORTAFOLIO/app/{{$producto->Imagen2}}" alt="FOTO 2">
                    </div>
                    <input type="file"  class="form-control" id="Imagen2" name="Imagen2" accept="image/*" onchange="previewImage('Imagen2', 'Imagen2p')">
                    {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {{ Form::label('Imagen 3') }}
                    <div class="signature-box">
                        <img id="Imagen3p" src="/PORTAFOLIO/app/{{$producto->Imagen3}}" alt="FOTO 3">
                    </div>
                    <input type="file"  class="form-control" id="Imagen3" name="Imagen3" accept="image/*" onchange="previewImage('Imagen3', 'Imagen3p')">
                    {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    {{ Form::label('Imagen 4') }}
                    <div class="signature-box">
                        <img id="Imagen4p" src="/PORTAFOLIO/app/{{$producto->Imagen4}}" alt="FOTO 4">
                    </div>
                    <input type="file"  class="form-control" id="Imagen4" name="Imagen4" accept="image/*" onchange="previewImage('Imagen4', 'Imagen4p')">
                    {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Categoria') }}
                    {{ Form::select('Categoria_id', $categoria,$producto->Categoria_id, ['class' => 'form-control' . ($errors->has('Categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccion']) }}
                    {!! $errors->first('Categoria_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Nombre Producto') }}
                    {{ Form::text('NombreProducto', $producto->NombreProducto, ['class' => 'form-control' . ($errors->has('NombreProducto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre producto']) }}
                    {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Estado') }}
                    {{ Form::select('Estado',['Activo'=>'Activo','Inactivo'=>'Inactivo'],$producto->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                    {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
           
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Valor') }}
                    {{ Form::text('Valor', $producto->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
                    {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Cantidad Exitente') }}
                    {{ Form::number('CantidadExitente', $producto->CantidadExitente, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Exitente']) }}
                    {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
       
    
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Descuento') }}
                    {{ Form::text('Descuento', $producto->Descuento, ['class' => 'form-control' . ($errors->has('Descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
                    {!! $errors->first('Descuento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    {{ Form::label('Valor Envio') }}
                    {{ Form::text('ValorEvio', $producto->ValorEvio, ['class' => 'form-control' . ($errors->has('ValorEvio') ? ' is-invalid' : ''), 'placeholder' => 'Valor envio']) }}
                    {!! $errors->first('ValorEvio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
        </div>
        <div class="col-sm-12">
            <div class="form-check">
                {{ Form::checkbox('Oferta', $producto->Oferta, ['class' => 'form-control' . ($errors->has('Oferta') ? ' is-invalid' : '')]) }}

                <label class="form-check-label" for="Oferta">
                    PRODUCTO OFERTA
                </label>
            </div> 
            <div class="form-check">
                {{ Form::checkbox('agregarcomentario', $producto->agregarcomentario, ['agregarcomentario' => 'form-control' . ($errors->has('Oferta') ? ' is-invalid' : '')]) }}

                <label class="form-check-label" for="agregarcomentario">
                    ¿PERMITIR QUE EL CLIENTE COLOQUE UN COMENTARIO AL ORDENAR ?
                </label>
            </div>
            <div class="form-group">
                {{ Form::label('Descripcion') }}
                {{ Form::textarea('Descripcion', $producto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    </div>
     
        </div>
        
      
       
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
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
    
    </script>