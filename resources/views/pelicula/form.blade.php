<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::select('genero_id', $genero, $pelicula->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pelicula->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productor') }}
            {{ Form::text('productor', $pelicula->productor, ['class' => 'form-control' . ($errors->has('productor') ? ' is-invalid' : ''), 'placeholder' => 'Productor']) }}
            {!! $errors->first('productor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pirata') }}
            <select class="form-control" name="pirata" id="pirata">
                <option value="1" @if (old('active') == 1) selected @endif>Pirata</option>
                <option value="0" @if (old('active') == 0) selected @endif>Legal</option>
            </select>
            {!! $errors->first('pirata', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $pelicula->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
