@extends('layouts.app')

@section('template_title')
    Devolucion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Devolucion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('devolucions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cod Detalle Factura</th>
										<th>Cod Detalle Articulo</th>
										<th>Motivo</th>
										<th>Fecha Devolucion</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devolucions as $devolucion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $devolucion->cod_detalle_factura }}</td>
											<td>{{ $devolucion->cod_detalle_articulo }}</td>
											<td>{{ $devolucion->motivo }}</td>
											<td>{{ $devolucion->fecha_devolucion }}</td>
											<td>{{ $devolucion->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('devolucions.destroy',$devolucion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('devolucions.show',$devolucion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('devolucions.edit',$devolucion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $devolucions->links() !!}
            </div>
        </div>
    </div>
@endsection
