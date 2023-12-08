@extends('layouts.app')

@section('template_title')
    {{ $movimiento->name ?? 'Show Movimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Consecutivo:</strong>
                            {{ $movimiento->Consecutivo }}
                        </div>
                        <div class="form-group">
                            <strong>Identrada:</strong>
                            {{ $movimiento->idEntrada }}
                        </div>
                        <div class="form-group">
                            <strong>Origen:</strong>
                            {{ $movimiento->Origen }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $movimiento->Destino }}
                        </div>
                        <div class="form-group">
                            <strong>Codigomovimiento:</strong>
                            {{ $movimiento->CodigoMovimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Creadormovimiento Id:</strong>
                            {{ $movimiento->CreadorMovimiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Actualizacion Id:</strong>
                            {{ $movimiento->Actualizacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipomovimiento:</strong>
                            {{ $movimiento->TipoMovimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $movimiento->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios1:</strong>
                            {{ $movimiento->Comentarios1 }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios2:</strong>
                            {{ $movimiento->Comentarios2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
