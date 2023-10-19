@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tipo Articulo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tipo Articulo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-articulos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-articulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
