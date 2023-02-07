@extends('layouts.app')

@section('template_title')
    Manga
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Manga') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mangas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Mangaka</th>
										<th>Fisico</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mangas as $manga)
                                    @if($manga->fisico==0){
                                        @php $fisico = "Digital"; @endphp
                                    }@else{
                                        @php $fisico = "Fisico"; @endphp
                                    }@endif
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $manga->genero->nombre}}</td>
											<td>{{ $manga->nombre }}</td>
											<td>{{ $manga->mangaka }}</td>
											<td>{{ $fisico}}</td>
											<td>{{ $manga->nota }}</td>

                                            <td>
                                                <form action="{{ route('mangas.destroy',$manga->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mangas.show',$manga->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mangas.edit',$manga->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $mangas->links() !!}
            </div>
        </div>
    </div>
@endsection
