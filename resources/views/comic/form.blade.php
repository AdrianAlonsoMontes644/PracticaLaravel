<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::select('genero_id', $genero, $comic->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $comic->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dibujante') }}
            {{ Form::text('dibujante', $comic->dibujante, ['class' => 'form-control' . ($errors->has('dibujante') ? ' is-invalid' : ''), 'placeholder' => 'Dibujante']) }}
            {!! $errors->first('dibujante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fisico') }}
            <select class="form-control" name="fisico" id="fisico">
                <option value="1" @if (old('active') == 1) selected @endif>Fisico</option>
                <option value="0" @if (old('active') == 0) selected @endif>Digital</option>
            </select>
            {!! $errors->first('fisico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota') }}
            {{ Form::text('nota', $comic->nota, ['class' => 'form-control' . ($errors->has('nota') ? ' is-invalid' : ''), 'placeholder' => 'Nota']) }}
            {!! $errors->first('nota', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
