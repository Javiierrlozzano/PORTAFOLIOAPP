@extends('layouts.app')

@section('template_title')
    Movimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h3 id="card_title">
                                {{ __('Movimiento') }}
                            </h3>

                             <div class="float-right">
                                <a href="{{ route('movimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Consecutivo</th>
										<th>Identrada</th>
										<th>Origen</th>
										<th>Destino</th>
										<th>Codigomovimiento</th>
										<th>Creadormovimiento Id</th>
										<th>Actualizacion Id</th>
										<th>Tipomovimiento</th>
										<th>Estado</th>
										<th>Comentarios1</th>
										<th>Comentarios2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movimientos as $movimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movimiento->Consecutivo }}</td>
											<td>{{ $movimiento->idEntrada }}</td>
											<td>{{ $movimiento->Origen }}</td>
											<td>{{ $movimiento->Destino }}</td>
											<td>{{ $movimiento->CodigoMovimiento }}</td>
											<td>{{ $movimiento->CreadorMovimiento_id }}</td>
											<td>{{ $movimiento->Actualizacion_id }}</td>
											<td>{{ $movimiento->TipoMovimiento }}</td>
											<td>{{ $movimiento->Estado }}</td>
											<td>{{ $movimiento->Comentarios1 }}</td>
											<td>{{ $movimiento->Comentarios2 }}</td>

                                            <td>
                                                <form action="{{ route('movimientos.destroy',$movimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movimientos.show',$movimiento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movimientos.edit',$movimiento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $movimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
