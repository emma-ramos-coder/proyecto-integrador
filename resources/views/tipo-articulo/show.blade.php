@extends('layouts.app')

@section('template_title')
    {{ $tipoArticulo->name ?? "{{ __('Show') Tipo Articulo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-articulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Articulo:</strong>
                            {{ $tipoArticulo->id_tipo_articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Articulo:</strong>
                            {{ $tipoArticulo->descripcion_articulo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
