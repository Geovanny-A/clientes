@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>Nuevo cliente</h2>
@stop

@section('content')
<form action="/clientes" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input maxlength="45" type="text" class="form-control" name="nombre" required placeholder="Nombre">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="tipo" class="form-control">
                    <option disabled selected>Tipo documento</option>
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                    <option value="CE">CE</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <input type="number" class="form-control" name="documento" required placeholder="Documento">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="estado" class="form-control">
                    <option disabled selected>Estado civil</option>
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="union libre">Unión libre</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input type="text" class="form-control" name="direccion" required placeholder="Dirección">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="pais" class="form-control">
                    <option disabled selected>Pais</option>
                    <option value="colombia">Colombia</option>
                    <option value="mexico">México</option>
                    <option value="canada">Canadá</option>
                    <option value="estados unidos">Estados Unidos</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="departamento" class="form-control">
                    <option disabled selected>Departamento</option>
                    <option value="norte de santander">Norte de santander</option>
                    <option value="cesar">Cesar</option>
                    <option value="santander">Santander</option>
                    <option value="valle del cauca">Valle del cauca</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="ciudad" class="form-control">
                    <option disabled selected>Ciudad</option>
                    <option value="ocaña">Ocaña</option>
                    <option value="aguachica">Aguachica</option>
                    <option value="bucaramanga">Bucaramanga</option>
                    <option value="cali">Cali</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input type="text" class="form-control" name="barrio" required placeholder="Barrio">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <input type="number" class="form-control" name="celular" required placeholder="Celular">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <input class="input100 form-control" type="text" name="fechaNacimiento" placeholder="Fecha de Nacimiento" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="genero" class="form-control">
                    <option disabled selected>Genero</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <input type="text" class="form-control" name="email" required placeholder="Correo electronico">
        </div>
    </div>

    <a href="/clientes" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop