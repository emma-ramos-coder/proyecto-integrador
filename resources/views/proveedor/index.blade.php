@extends('layouts.app')

@section('template_title')
    Proveedor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Num Documento</th>
										<th>Tipo Documento</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Nombre Comercial</th>
										<th>Direccion</th>
										<th>Ciudad</th>
										<th>Telefono</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedors as $proveedor)
                                        <tr>
                                            <td>{{ ++$i }}</td>                                            
											<td>{{ $proveedor->Num_documento }}</td>
											<td>{{ $proveedor->tipoDeDocumento->descripcion }}</td>
											<td>{{ $proveedor->nombre }}</td>
											<td>{{ $proveedor->apellido }}</td>
											<td>{{ $proveedor->nombre_comercial }}</td>
											<td>{{ $proveedor->direccion }}</td>
											<td>{{ $proveedor->ciudad->nombre_ciudad }}</td>
											<td>{{ $proveedor->telefono }}</td>
                                            <td>
                                                <form action="{{ route('proveedors.destroy',$proveedor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedors.show',$proveedor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proveedors.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $proveedors->links() !!}
            </div>
        </div>
    </div>
@endsection
