@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h2><i class="fas fa-user"></i> Clientes</h2>
@stop

@section('content')
<a href="clientes/create" class="btn mb-3"><i class="fas fa-plus"></i></a>

<table id="clientes" class="table table-borderless mt-4 ">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>


        @foreach($clientes as $cliente)

        <tr>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->documento}}</td>
            <td>{{$cliente->celular}}</td>
            <td>
                <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn"><i class="fas fa-pencil-alt"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="fas fa-minus-circle"></i></button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>
<hr size="2px" color="black" />
<?php
    $contador = count($clientes);
        echo $contador . " Clientes";
?>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#clientes').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
@stop