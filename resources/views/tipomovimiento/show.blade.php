@extends('layouts.app')

@section('template_title')
    {{ $tipomovimiento->name ?? 'Show Tipomovimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipomovimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipomovimientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipomovimiento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tipomovimiento->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descuentoexistencia:</strong>
                            {{ $tipomovimiento->DescuentoExistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Añadeexistencia:</strong>
                            {{ $tipomovimiento->AñadeExistencia }}
                        </div>
                        <div class="form-group">
                            <strong>Bloquea:</strong>
                            {{ $tipomovimiento->Bloquea }}
                        </div>
                        <div class="form-group">
                            <strong>Alertar:</strong>
                            {{ $tipomovimiento->Alertar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
