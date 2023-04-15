@extends('layouts.sb-admin.index')
@section('contenido')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de productos</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
        </div>
        <div><a href="{{ url('productos/formProducto') }}" class="btn btn-success">Nuevo producto</a></div>
        <br>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ventas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id de Producto</th>
                                <th>Nombre de Producto</th>
                                <th>Referencia</th>
                                <th>Precio</th>
                                <th>Peso</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id de Producto</th>
                                <th>Nombre de Producto</th>
                                <th>Referencia</th>
                                <th>Precio</th>
                                <th>Peso</th>
                                <th>Categoria</th>
                                <th>Stock</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td scope="row">{{ $producto->id }}</td>
                                    <td>{{ $producto->producto_nombre }}</td>
                                    <td>{{ $producto->producto_referencia }}</td>
                                    <td>{{ $producto->producto_precio }}</td>
                                    <td>{{ $producto->producto_peso }}</td>
                                    <td>{{ $producto->producto_categoria }}</td>
                                    <td>{{ $producto->producto_stock }}</td>
                                    <td><a href="{{ url('productos/editProducto', ['id' => $producto->id]) }}"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true" class="btn btn-danger"></i>
                                            Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('productos.eliminar', $producto) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Eliminar" class="btn btn-danger"
                                                onclick="return confirm('¿Desea Eliminar el registro...?')">
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
    <!-- /.container-fluid -->
@endsection
@section('pie')
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        });
    </script>
@endsection
