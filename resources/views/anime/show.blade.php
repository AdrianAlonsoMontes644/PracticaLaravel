@extends('layouts.app')

@section('template_title')
    {{ $anime->name ?? 'Show Anime' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Anime</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('animes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $anime->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $anime->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Doblado:</strong>
                            {{ $anime->doblado }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $anime->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
