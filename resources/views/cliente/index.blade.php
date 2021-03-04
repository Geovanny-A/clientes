@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h2>Clientes</h2>
@stop

@section('content')
<a href="clientes/create" class="btn btn-primary mb-3">Nuevo cliente</a>

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
                    <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

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
            "lengthMenu": [[5,10,50, -1], [5, 10, 50, "All"]]
        });
    });
</script>
@stop