@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? 'Show Contacto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $contacto->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Long:</strong>
                            {{ $contacto->long }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $contacto->Latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contacto->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $contacto->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $contacto->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $contacto->clientes_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
