@extends('layouts.app')

@section('template_title')
    {{ $movimientosdetallado->name ?? 'Show Movimientosdetallado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Movimientosdetallado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movimientosdetallados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $movimientosdetallado->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $movimientosdetallado->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadexistencias:</strong>
                            {{ $movimientosdetallado->CantidadExistencias }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $movimientosdetallado->Total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
