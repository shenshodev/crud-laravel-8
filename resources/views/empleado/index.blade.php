@extends('layouts.page.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-with-icon fade in" data-notify="container">
                    <i class="material-icons" data-notify="icon">notifications</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <span data-notify="message">{{ Session::get('mensaje') }}</span>
                </div>
            @endif


            <h2 class="card-title text-center"><a href="{{ url('empleado/create') }}" class="btn btn-success"> Registrar Nuevo Empleado</a></h2>
            
            <div class="">
                {{-- @if (Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        {{ Session::get('mensaje') }}
                    </div>
                @endif --}}

                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">person</i>
                    </div>

                    <div class="card-content">
                        <h3 class="card-title">Empleados</h3>

                        <div class="table-responsive">

                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Correo</th>
                                        <th class="disabled-sorting text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Correo</th>
                                        <th class="disabled-sorting text-center">Acciones</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                    <tr>
                                        <td scope="row"> {{ $empleado->id }}</td>
                                        <td>
                                            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="" style="max-width: 50px;">
                                        </td>
                                        <td>{{ $empleado->Nombre }}</td>
                                        <td>{{ $empleado->ApellidoPaterno }}</td>
                                        <td>{{ $empleado->ApellidoMaterno }}</td>
                                        <td>{{ $empleado->Correo }}</td>
                                        <td class="td-actions text-center">
                                            
                                            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning" type="button">
                                                <i class="material-icons btn-tooltip" data-toggle="tooltip" data-placement="top" title="Editar Registro" data-container="body">edit</i>
                                            </a>

                                            <a class="btn btn-danger" data-toggle="modal" data-target="#smallAlertModal{{ $empleado->id }}">
                                                <i class="material-icons btn-tooltip" data-toggle="tooltip" data-placement="top" title="Eliminar Registro" data-container="body">close</i>
                                            </a>

                                            <div class="modal fade" id="smallAlertModal{{ $empleado->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-small ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                                                                    class="material-icons">clear</i></button>
                                                            <h4 class="modal-title">¿Eliminar el registro?</h4>
                                            
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <h5>Esta acción no será reversible</h5>
                                                        </div>
                                                        <div class="modal-footer text-center">
                                                            <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form{{ $empleado->id }}').submit();">Si</button>
                                                            <button type="button" class="btn " data-dismiss="modal">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" id="delete-form{{ $empleado->id }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
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
</div>

@endsection