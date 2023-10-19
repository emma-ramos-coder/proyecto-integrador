@extends('layouts.app')

@section('template_title')
    {{ $detalleFactura->name ?? "{{ __('Show') Detalle Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Factura:</strong>
                            {{ $detalleFactura->cod_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Articulo:</strong>
                            {{ $detalleFactura->cod_articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleFactura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $detalleFactura->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
