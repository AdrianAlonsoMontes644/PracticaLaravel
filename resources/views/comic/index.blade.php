@extends('layouts.app')

@section('template_title')
    Comic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comic') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Genero</th>
										<th>Nombre</th>
										<th>Dibujante</th>
										<th>Fisico</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comics as $comic)
                                        @if($comic->fisico==0){
                                            @php $fisico = "Digital"; @endphp
                                        }@else{
                                            @php $fisico = "Fisico"; @endphp
                                        }@endif
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $comic->genero->nombre}}</td>
											<td>{{ $comic->nombre }}</td>
											<td>{{ $comic->dibujante }}</td>
											<td>{{ $fisico }}</td>
											<td>{{ $comic->nota }}</td>

                                            <td>
                                                <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comics.show',$comic->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comics.edit',$comic->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comics->links() !!}
            </div>
        </div>
    </div>
@endsection
