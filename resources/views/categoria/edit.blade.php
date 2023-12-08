@extends('layouts.app')

@section('template_title')
    Update Categoria
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                        <h2 >Actualizar  Categoria</h2>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
