@extends('layouts.app')

@section('template_title')
    {{ $bodega->name ?? 'Show Bodega' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bodega</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodegas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bodega->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $bodega->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Empresas Id:</strong>
                            {{ $bodega->Empresas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $bodega->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Tiendavirtual:</strong>
                            {{ $bodega->TiendaVirtual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
