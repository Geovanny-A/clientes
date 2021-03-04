@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>Nuevo cliente</h2>
@stop

@section('content')
<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input maxlength="45" type="text" class="form-control" name="nombre" required value="{{$cliente->nombre}}">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="tipo" class="form-control">
                    <option disabled selected>Tipo documento</option>
                    <option value="CC" <?php if ($cliente['tipo_documento'] == 'CC') {
                                            echo "selected='selected'";
                                        } ?>>CC</option>
                    <option value="TI" <?php if ($cliente['tipo_documento'] == 'TI') {
                                            echo "selected='selected'";
                                        } ?>>TI</option>
                    <option value="CE" <?php if ($cliente['tipo_documento'] == 'CE') {
                                            echo "selected='selected'";
                                        } ?>>CE</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <input type="number" class="form-control" name="documento" required value="{{$cliente->documento}}">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="estado" class="form-control">
                    <option disabled selected>Estado civil</option>
                    <option value="soltero" <?php if ($cliente['estado'] == 'soltero') {
                                                echo "selected='selected'";
                                            } ?>>Soltero</option>
                    <option value="casado" <?php if ($cliente['estado'] == 'casado') {
                                                echo "selected='selected'";
                                            } ?>>Casado</option>
                    <option value="divorciado" <?php if ($cliente['estado'] == 'divorciado') {
                                                    echo "selected='selected'";
                                                } ?>>Divorciado</option>
                    <option value="union libre" <?php if ($cliente['estado'] == 'union libre') {
                                                    echo "selected='selected'";
                                                } ?>>Unión libre</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input type="text" class="form-control" name="direccion" required value="{{$cliente->direccion}}">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="pais" class="form-control">
                    <option disabled selected>Pais</option>
                    <option value="colombia" <?php if ($cliente['pais'] == 'colombia') {
                                                    echo "selected='selected'";
                                                } ?>>Colombia</option>
                    <option value="mexico" <?php if ($cliente['pais'] == 'mexico') {
                                                echo "selected='selected'";
                                            } ?>>México</option>
                    <option value="canada" <?php if ($cliente['pais'] == 'canada') {
                                                echo "selected='selected'";
                                            } ?>>Canadá</option>
                    <option value="estados unidos" <?php if ($cliente['pais'] == 'estados unidos') {
                                                        echo "selected='selected'";
                                                    } ?>">Estados Unidos</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="departamento" class="form-control">
                    <option disabled selected>Departamento</option>
                    <option value="norte de santander" <?php if ($cliente['departamento'] == 'norte de santander') {
                                                            echo "selected='selected'";
                                                        } ?>>Norte de santander</option>
                    <option value="cesar" <?php if ($cliente['departamento'] == 'cesar') {
                                                echo "selected='selected'";
                                            } ?>>Cesar</option>
                    <option value="santander" <?php if ($cliente['departamento'] == 'santander') {
                                                    echo "selected='selected'";
                                                } ?>>Santander</option>
                    <option value="valle del cauca" <?php if ($cliente['departamento'] == 'valle del cauca') {
                                                        echo "selected='selected'";
                                                    } ?>>Valle del cauca</option>
                </select>
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <select name="ciudad" class="form-control">
                    <option disabled selected>Ciudad</option>
                    <option value="ocaña" <?php if ($cliente['ciudad'] == 'ocaña') {
                                                echo "selected='selected'";
                                            } ?>>Ocaña</option>
                    <option value="aguachica" <?php if ($cliente['ciudad'] == 'aguachica') {
                                                    echo "selected='selected'";
                                                } ?>>Aguachica</option>
                    <option value="bucaramanga" <?php if ($cliente['ciudad'] == 'bucaramanga') {
                                                    echo "selected='selected'";
                                                } ?>>Bucaramanga</option>
                    <option value="cali" <?php if ($cliente['ciudad'] == 'cali') {
                                                echo "selected='selected'";
                                            } ?>>Cali</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3">
                <input type="text" class="form-control" name="barrio" required value="{{$cliente->barrio}}">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <input type="number" class="form-control" name="celular" required value="{{$cliente->celular}}">
            </div>
        </div>

        <div class="col">
            <div class="mb-3">
                <input class="input100 form-control" type="text" name="fechaNacimiento" value="{{$cliente->fecha_nacimiento}}" onclick="ocultarError();" onfocus="(this.type='date')" onblur="(this.type='text')">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <select name="genero" class="form-control">
                    <option disabled selected>Genero</option>
                    <option value="masculino" <?php if ($cliente['genero'] == 'masculino') {
                                                    echo "selected='selected'";
                                                } ?>>Masculino</option>
                    <option value="femenino" <?php if ($cliente['genero'] == 'femenino') {
                                                    echo "selected='selected'";
                                                } ?>>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="mb-3">
            <input type="text" class="form-control" name="email" required value="{{$cliente->email}}">
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