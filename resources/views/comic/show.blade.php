@extends('layouts.app')

@section('template_title')
    {{ $comic->name ?? 'Show Comic' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $comic->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $comic->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dibujante:</strong>
                            {{ $comic->dibujante }}
                        </div>
                        <div class="form-group">
                            <strong>Fisico:</strong>
                            {{ $comic->fisico }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $comic->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
