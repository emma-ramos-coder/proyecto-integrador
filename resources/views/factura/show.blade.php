@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Num Factura:</strong>
                            {{ $factura->num_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Cliente:</strong>
                            {{ $factura->cod_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empleado:</strong>
                            {{ $factura->nombre_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Facturacion:</strong>
                            {{ $factura->fecha_facturacion }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Forma Pago:</strong>
                            {{ $factura->cod_forma_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Total Factura:</strong>
                            {{ $factura->total_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $factura->iva }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
