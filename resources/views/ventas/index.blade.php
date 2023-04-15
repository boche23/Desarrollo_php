@extends('layouts.sb-admin.index')
@section('contenido')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de ventas</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
        </div>
        <div><a href="{{ url('ventas/formVenta') }}" class="btn btn-success">Nueva venta</a></div>
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
                                <th>Producto vendido</th>
                                <th>Referencia</th>
                                <th>Cantidad Vendida</th>
                                <th>Cantidad Disponible</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Producto vendido</th>
                                <th>Referencia</th>
                                <th>Cantidad Vendida</th>
                                <th>Cantidad Disponible</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($ventas as $venta)
                                <tr>
                                    <td>{{ $venta->producto_nombre }}</td>
                                    <td>{{ $venta->producto_referencia }}</td>
                                    <td>{{ $venta->venta_cantidad }}</td>
                                    <td>{{ $venta->producto_stock }}</td>
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
