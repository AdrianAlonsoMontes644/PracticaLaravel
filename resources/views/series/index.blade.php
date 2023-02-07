@extends('layouts.app')

@section('template_title')
    Series
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Series') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('series.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Plataforma</th>
										<th>Pirata</th>
										<th>Nota</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($series as $serie)
                                    @if($serie->pirata==0){
                                        @php $pirata = "Legal"; @endphp
                                    }@else{
                                        @php $pirata = "Pirata"; @endphp
                                    }@endif
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $serie->genero->nombre }}</td>
											<td>{{ $serie->nombre }}</td>
											<td>{{ $serie->plataforma }}</td>
											<td>{{ $pirata }}</td>
											<td>{{ $serie->nota }}</td>

                                            <td>
                                                <form action="{{ route('series.destroy',$serie->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('series.show',$serie->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('series.edit',$serie->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $series->links() !!}
            </div>
        </div>
    </div>
@endsection
