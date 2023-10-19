@extends('layouts.app')

@section('template_title')
    Forma De Pago
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Forma De Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('forma-de-pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Forma Pago</th>
										<th>Descripcion Forma Pago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formaDePagos as $formaDePago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $formaDePago->id_forma_pago }}</td>
											<td>{{ $formaDePago->descripcion_forma_pago }}</td>

                                            <td>
                                                <form action="{{ route('forma-de-pagos.destroy',$formaDePago->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('forma-de-pagos.show',$formaDePago->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('forma-de-pagos.edit',$formaDePago->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $formaDePagos->links() !!}
            </div>
        </div>
    </div>
@endsection
