@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numerofactura:</strong>
                            {{ $factura->NumeroFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Valortotal:</strong>
                            {{ $factura->Valortotal }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $factura->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Mediopago:</strong>
                            {{ $factura->MedioPago }}
                        </div>
                        <div class="form-group">
                            <strong>Valorevio:</strong>
                            {{ $factura->ValorEvio }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $factura->Clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $factura->Empresa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Contactos Id:</strong>
                            {{ $factura->contactos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
