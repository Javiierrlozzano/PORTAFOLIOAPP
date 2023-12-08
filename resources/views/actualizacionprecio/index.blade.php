@extends('layouts.app')

@section('template_title')
    Actualizacionprecio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actualizacionprecio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actualizacionprecios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Protucto Id</th>
										<th>Precioactual</th>
										<th>Utilidad%</th>
										<th>Valorutilidad</th>
										<th>Preciopublico</th>
										<th>Origenproducto Id</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actualizacionprecios as $actualizacionprecio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $actualizacionprecio->protucto_id }}</td>
											<td>{{ $actualizacionprecio->PrecioActual }}</td>
											<td>{{ $actualizacionprecio->Utilidad% }}</td>
											<td>{{ $actualizacionprecio->ValorUtilidad }}</td>
											<td>{{ $actualizacionprecio->PrecioPublico }}</td>
											<td>{{ $actualizacionprecio->OrigenProducto_id }}</td>
											<td>{{ $actualizacionprecio->Estado }}</td>

                                            <td>
                                                <form action="{{ route('actualizacionprecios.destroy',$actualizacionprecio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actualizacionprecios.show',$actualizacionprecio->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actualizacionprecios.edit',$actualizacionprecio->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $actualizacionprecios->links() !!}
            </div>
        </div>
    </div>
@endsection
