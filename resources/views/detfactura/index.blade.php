@extends('layouts.app')

@section('template_title')
    Detfactura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detfactura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detfacturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Cantidad</th>
										<th>Valorunidad</th>
										<th>Valortotal</th>
										<th>Descuento</th>
										<th>Facturas Id</th>
										<th>Valoreviototal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detfacturas as $detfactura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detfactura->protucto_id }}</td>
											<td>{{ $detfactura->Cantidad }}</td>
											<td>{{ $detfactura->Valorunidad }}</td>
											<td>{{ $detfactura->ValorTotal }}</td>
											<td>{{ $detfactura->Descuento }}</td>
											<td>{{ $detfactura->facturas_id }}</td>
											<td>{{ $detfactura->ValorEvioTotal }}</td>

                                            <td>
                                                <form action="{{ route('detfacturas.destroy',$detfactura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detfacturas.show',$detfactura->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detfacturas.edit',$detfactura->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $detfacturas->links() !!}
            </div>
        </div>
    </div>
@endsection
