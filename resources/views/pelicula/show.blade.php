@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? 'Show Pelicula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $pelicula->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pelicula->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Productor:</strong>
                            {{ $pelicula->productor }}
                        </div>
                        <div class="form-group">
                            <strong>Pirata:</strong>
                            {{ $pelicula->pirata }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $pelicula->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
