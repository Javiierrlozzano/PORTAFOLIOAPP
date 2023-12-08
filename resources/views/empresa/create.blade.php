@extends('layouts.app')

@section('template_title')
    Create Empresa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="panel-header">
                        <h2>Crear Empresa</h2>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('empresas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('empresa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
