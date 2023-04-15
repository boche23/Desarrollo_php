@extends('layouts.sb-admin.index')
@section('contenido')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Registrar venta</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            -{{ $error }}
                        @endforeach
                    </div>
                @endif
                @if (session('mensaje'))
                    <div class="alert alert-{{ session('tipo') }}">
                        {{ session('mensaje') }}
                    </div>
                @endif

                <form action="{{ route('ventas.guardar') }}" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-select">Seleccione Producto</label>
                                <select id="my-select" class="form-control" value="{{ old('id_producto') }}"
                                    name="id_producto">
                                    <option value="">Seleccione</option>
                                    @foreach ($ventas as $item)
                                        <option value="{{ $item->id }}">{{ $item->producto_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Cantidad Vendida</label>
                                <input id="my-input" class="form-control" type="number" value="{{ old('venta_cantidad') }}"
                                    name="venta_cantidad">
                            </div>
                        </div>
                        <div class="col-auto">
                            @csrf
                            <br><button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                        <div class="col-auto">
                            <br><a href="{{ url('/ventas') }}" class="btn btn-danger">Cancelar</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
