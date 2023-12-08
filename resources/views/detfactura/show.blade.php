@extends('layouts.app')

@section('template_title')
    {{ $detfactura->name ?? 'Show Detfactura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detfactura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detfacturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Protucto Id:</strong>
                            {{ $detfactura->protucto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detfactura->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Valorunidad:</strong>
                            {{ $detfactura->Valorunidad }}
                        </div>
                        <div class="form-group">
                            <strong>Valortotal:</strong>
                            {{ $detfactura->ValorTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $detfactura->Descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Facturas Id:</strong>
                            {{ $detfactura->facturas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valoreviototal:</strong>
                            {{ $detfactura->ValorEvioTotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
