@extends('layouts.app')

@section('template_title')
    {{ $intere->name ?? 'Show Intere' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Intere</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('interes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $intere->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $intere->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $intere->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
