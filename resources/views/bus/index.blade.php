@extends('layoutsBusiness.app')

@section('template_title')
    Viaje
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Viaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Numero de Bus</th>
										<th>Capacidad</th>
										<th>ID de viaje</th>
										<th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buses as $info)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $info->num_bus }}</td>
											<td>{{ $info->capacidad }}</td>
											<td>{{ $info->id_viaje }}</td>
											<td>{{ $info->estado }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
