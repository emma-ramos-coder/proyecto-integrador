@extends('layouts.app')

@section('template_title')
    Tipo Articulo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Articulo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-articulos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Tipo Articulo</th>
										<th>Descripcion Articulo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoArticulos as $tipoArticulo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoArticulo->id_tipo_articulo }}</td>
											<td>{{ $tipoArticulo->descripcion_articulo }}</td>

                                            <td>
                                                <form action="{{ route('tipo-articulos.destroy',$tipoArticulo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-articulos.show',$tipoArticulo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-articulos.edit',$tipoArticulo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tipoArticulos->links() !!}
            </div>
        </div>
    </div>
@endsection
