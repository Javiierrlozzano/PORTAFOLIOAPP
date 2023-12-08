@extends('layouts.app')

@section('template_title')
    Movimientosdetallado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movimientosdetallado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movimientosdetallados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Producto Id</th>
										<th>Cantidad</th>
										<th>Cantidadexistencias</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movimientosdetallados as $movimientosdetallado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movimientosdetallado->producto_id }}</td>
											<td>{{ $movimientosdetallado->Cantidad }}</td>
											<td>{{ $movimientosdetallado->CantidadExistencias }}</td>
											<td>{{ $movimientosdetallado->Total }}</td>

                                            <td>
                                                <form action="{{ route('movimientosdetallados.destroy',$movimientosdetallado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movimientosdetallados.show',$movimientosdetallado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movimientosdetallados.edit',$movimientosdetallado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $movimientosdetallados->links() !!}
            </div>
        </div>
    </div>
@endsection
