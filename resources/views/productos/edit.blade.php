@extends('layouts.sb-admin.index')
@section('contenido')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editar producto</h1>
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
                <form action="{{ route('productos.editGuardar') }}" method="POST">
                    <input id="my-input" class="form-control" type="hidden" value="{{ $data->id }}" name="id">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Nombre del producto</label>
                                <input id="my-input" class="form-control" type="text"
                                    value="{{ $data->producto_nombre }}" name="producto_nombre">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Referencia</label>
                                <input id="my-input" class="form-control" type="text" value="{{ $data->producto_referencia }}"
                                    name="producto_referencia">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Precio del producto</label>
                                <input id="my-input" class="form-control" type="number" value="{{ $data->producto_precio }}"
                                    name="producto_precio">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Peso del producto</label>
                                <input id="my-input" class="form-control" type="number" value="{{ $data->producto_peso }}"
                                    name="producto_peso">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Categoria</label>
                                <input id="my-input" class="form-control" type="text" value="{{ $data->producto_categoria }}"
                                    name="producto_categoria">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="my-input">Stock</label>
                                <input id="my-input" class="form-control" type="number" value="{{ $data->producto_stock }}"
                                    name="producto_stock">
                            </div>
                        </div>
                        <div class="col-auto">
                            @csrf
                            <br><button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
