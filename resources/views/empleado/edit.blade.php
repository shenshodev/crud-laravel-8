@extends('layouts.page.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">person</i>
                </div>
                <div class="card-content">
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        @include('empleado.form', ['modo'=>'Editar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection