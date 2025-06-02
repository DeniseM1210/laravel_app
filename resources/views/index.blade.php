@extends('adminlte::page')

@section('title', 'Listado de Alumnos')

@section('content_header')
    <h1 class="text-center">SERVICIOS ESCOLARES</h1>
@endsection

@section('content')

@if(session('message'))
    <div class="alert alert-success msj">
        {{ session('message') }}
    </div>
    <script>
        setTimeout(function() {
            $(".msj").fadeOut(1500); 
        }, 20000); 
@endif

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Inicio</li>
        <li class="breadcrumb-item active" aria-current="page">Alumnos</li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Listado de Alumnos</h3>
        <div class="card-tools">
            <a href="{{ route('alumnos.create') }}" class="btn btn-success">AGREGAR</a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class='table table-striped table-bordered table-hover text-center'>
                <thead>
                    <tr>
                        <th>Número de Control</th>
                        <th>Nombre</th>
                        <th>Primer Ap.</th>
                        <th>Segundo Ap.</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $a)
                        <tr> 
                            <td class='v-align-middle'>{{ $a->Num_Control }}</td>
                            <td class='v-align-middle'>{{ $a->Nombre }}</td>
                            <td class='v-align-middle'>{{ $a->Primer_Ap }}</td>
                            <td class='v-align-middle'>{{ $a->Segundo_Ap }}</td>
                            <td class='v-align-middle'> 
                                <form class="form-eliminar" action="{{ route('alumnos.destroy', $a->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('alumnos.show', $a->id) }}" class="btn btn-primary btn-sm">Detalle</a> 
                                    <a href="{{ route('alumnos.edit', $a->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
      .preloader {
        display: none !important;
      }
    </style>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const forms = document.querySelectorAll('.form-eliminar');

        forms.forEach(form => {
          form.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevenir envío automático

            Swal.fire({
              title: '¿Eliminar alumno?',
              text: "Esta acción no se puede deshacer",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#6c757d',
              confirmButtonText: 'Sí, eliminar',
              cancelButtonText: 'Cancelar',
              customClass: {
                popup: 'text-sm'
              }
            }).then((result) => {
              if (result.isConfirmed) {
                this.submit(); // Envía el formulario
              }
            });
          });
        });
      });
    </script>
    
@endsection

