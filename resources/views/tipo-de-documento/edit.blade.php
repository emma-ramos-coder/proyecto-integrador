@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Tipo De Documento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Tipo De Documento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-de-documentos.update', $tipoDeDocumento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipo-de-documento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection