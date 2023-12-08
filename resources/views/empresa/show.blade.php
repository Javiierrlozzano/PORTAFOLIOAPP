@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $empresa->Nit }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $empresa->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $empresa->Logo }}
                        </div>
                        <div class="form-group">
                            <strong>Eslogan:</strong>
                            {{ $empresa->Eslogan }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
