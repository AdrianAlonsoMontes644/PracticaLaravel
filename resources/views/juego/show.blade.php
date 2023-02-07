@extends('layouts.app')

@section('template_title')
    {{ $juego->name ?? 'Show Juego' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Juego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('juegos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $juego->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $juego->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            {{ $juego->plataforma }}
                        </div>
                        <div class="form-group">
                            <strong>Pirata:</strong>
                            {{ $juego->pirata }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $juego->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
