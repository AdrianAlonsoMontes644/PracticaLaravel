@extends('layouts.app')

@section('template_title')
    {{ $manga->name ?? 'Show Manga' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Manga</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mangas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $manga->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $manga->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Mangaka:</strong>
                            {{ $manga->mangaka }}
                        </div>
                        <div class="form-group">
                            <strong>Fisico:</strong>
                            {{ $manga->fisico }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $manga->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
