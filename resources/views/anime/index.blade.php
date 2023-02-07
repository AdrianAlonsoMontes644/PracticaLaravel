@extends('layouts.app')

@section('template_title')
    Anime
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Anime') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('animes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Doblado</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($animes as $anime)
                                        @if($anime->doblado==0){
                                            @php $doblado = "Subtitulo"; @endphp
                                        }@else{
                                            @php $doblado = "Doblado"; @endphp
                                        }@endif
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $anime->genero->nombre}}</td>
											<td>{{ $anime->nombre }}</td>
											<td>{{ $doblado }}</td>
											<td>{{ $anime->nota }}</td>

                                            <td>
                                                <form action="{{ route('animes.destroy',$anime->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('animes.show',$anime->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('animes.edit',$anime->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $animes->links() !!}
            </div>
        </div>
    </div>
@endsection
