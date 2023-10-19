@extends('layouts.app')

@section('template_title')
    {{ $formaDePago->name ?? "{{ __('Show') Forma De Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Forma De Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('forma-de-pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Forma Pago:</strong>
                            {{ $formaDePago->id_forma_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Forma Pago:</strong>
                            {{ $formaDePago->descripcion_forma_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
