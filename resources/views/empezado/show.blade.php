@extends('layouts.app')

@section('template_title')
    {{ $empezado->name ?? 'Show Empezado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empezado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empezado.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $empezado->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $empezado->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empezado->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
