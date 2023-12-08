@extends('layouts.app')

@section('template_title')
    {{ $actualizacionprecio->name ?? 'Show Actualizacionprecio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Actualizacionprecio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actualizacionprecios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Protucto Id:</strong>
                            {{ $actualizacionprecio->protucto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Precioactual:</strong>
                            {{ $actualizacionprecio->PrecioActual }}
                        </div>
                        <div class="form-group">
                            <strong>Utilidad%:</strong>
                            {{ $actualizacionprecio->Utilidad% }}
                        </div>
                        <div class="form-group">
                            <strong>Valorutilidad:</strong>
                            {{ $actualizacionprecio->ValorUtilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Preciopublico:</strong>
                            {{ $actualizacionprecio->PrecioPublico }}
                        </div>
                        <div class="form-group">
                            <strong>Origenproducto Id:</strong>
                            {{ $actualizacionprecio->OrigenProducto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actualizacionprecio->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
