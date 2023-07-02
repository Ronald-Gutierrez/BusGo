@extends('layoutsBusiness.app')

@section('template_title')
    Rutum
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <h1> Crea una nueva Ruta</h1>
                        </span>

                            <div class="float-right">
                            <a href="{{ route('ruta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    
                                    <th>Id Ruta</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Encargado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ruta as $rutum)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $rutum->id_ruta }}</td>
                                        <td>{{ $rutum->origen }}</td>
                                        <td>{{ $rutum->destino }}</td>
                                        <td>{{ $rutum->encargado }}</td>
                                        <!-- Esta Parte falta arreglar para hacer la eliminacion y editar y mostrar -->
                                
                                        <td>
                                            <form action="{{ route('ruta.destroy',['rutum' => $rutum->id_ruta]) }}" method="POST" class="formEliminar">
                                                <a class="btn btn-sm btn-primary " href="{{ route('ruta.show',['rutum' => $rutum->id_ruta]) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('ruta.edit',['rutum' => $rutum->id_ruta]) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
            {!! $ruta->links() !!}
        </div>
    </div>
</div>
@endsection
