@extends('layouts.app')

@section('template_title')
    {{ $devolucion->name ?? "{{ __('Show') Devolucion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Devolucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('devolucions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Detalle Facturas:</strong>
                            {{ $devolucion->detalleFactura->id  }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $devolucion->motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolucion:</strong>
                            {{ $devolucion->fecha_devolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $devolucion->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
