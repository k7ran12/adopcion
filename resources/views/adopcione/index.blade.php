@extends('layouts.app')

@section('template_title')
    Adopcione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Adopcione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('adopciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Rut</th>
										<th>Domicilio</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Mascota Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($adopciones as $adopcione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $adopcione->nombre }}</td>
											<td>{{ $adopcione->rut }}</td>
											<td>{{ $adopcione->domicilio }}</td>
											<td>{{ $adopcione->correo }}</td>
											<td>{{ $adopcione->telefono }}</td>
											<td>{{ $adopcione->mascota_id }}</td>

                                            <td>
                                                <form action="{{ route('adopciones.destroy',$adopcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('adopciones.show',$adopcione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('adopciones.edit',$adopcione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $adopciones->links() !!}
            </div>
        </div>
    </div>
@endsection
