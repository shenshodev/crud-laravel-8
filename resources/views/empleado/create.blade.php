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

                    <form action=" {{ url('/empleado') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        @include('empleado.form', ['modo'=>'Crear'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection