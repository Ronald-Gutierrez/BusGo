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
                                <a href="{{ route('viajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Viaje</th>
										<th>Fecha Inicio</th>
										<th>Fecha Retorno</th>
										<th>Estado</th>
										<th>Id Ruta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viajes as $viaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $viaje->id_viaje }}</td>
											<td>{{ $viaje->fecha_inicio }}</td>
											<td>{{ $viaje->fecha_retorno }}</td>
											<td>{{ $viaje->estado }}</td>
											<td>{{ $viaje->id_ruta }}</td>
                                            <!-- Esta Parte falta arreglar para hacer la eliminacion y editar y mostrar -->
                                
                                            <td>
                                                <form action="{{ route('viajes.destroy',['viaje' => $viaje->id_viaje]) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('viajes.show',['viaje' => $viaje->id_viaje]) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('viajes.edit',['viaje' => $viaje->id_viaje]) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $viajes->links() !!}
            </div>
        </div>
    </div>
@endsection
