@extends('layouts.app')

@section('template_title')
    Tipomovimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h3 id="card_title">
                                {{ __('Tipo movimiento') }}
                            </h3>

                             <div class="float-right">
                                <a href="{{ route('tipomovimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Codigo</th>
										<th>Descuento existencia</th>
										<th>Añade existencia</th>
										<th>Bloquea</th>
										<th>Alertar</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipomovimientos as $tipomovimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipomovimiento->Nombre }}</td>
											<td>{{ $tipomovimiento->Codigo }}</td>
											<td>{{ $tipomovimiento->DescuentoExistencia }}</td>
											<td>{{ $tipomovimiento->AñadeExistencia }}</td>
											<td>{{ $tipomovimiento->Bloquea }}</td>
											<td>{{ $tipomovimiento->Alertar }}</td>
                                            <td>{{ $tipomovimiento->Estado }}</td>
                                            <td>
                                                <form action="{{ route('tipomovimientos.destroy',$tipomovimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipomovimientos.show',$tipomovimiento->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipomovimientos.edit',$tipomovimiento->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipomovimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
