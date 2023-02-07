@extends('layouts.app')

@section('template_title')
    {{ $series->name ?? 'Show Series' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Series</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('series.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $series->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $series->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Plataforma:</strong>
                            {{ $series->plataforma }}
                        </div>
                        <div class="form-group">
                            <strong>Pirata:</strong>
                            {{ $series->pirata }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $series->nota }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
