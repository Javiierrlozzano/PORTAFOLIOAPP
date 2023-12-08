@extends('layouts.app')

@section('template_title')
    Create Tipomovimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Tipo movimiento</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('tipomovimientos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipomovimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
