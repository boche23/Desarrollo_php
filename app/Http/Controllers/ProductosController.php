<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    //metodo para mostrar todos los productos en la tabla productos
    public function index()
    {
        $productos = Producto::all();

        return view('productos.index', [
            'productos' => $productos,
        ]);
    }

    //metodo para enviar formulario crear producto
    public function new()
    {
        return view('productos.nuevo');
    }

    //metodo para guardar productos en la base de datos
    public function guardar(Request $request)
    {
        $request->validate([
            'producto_nombre' => 'required',
            'producto_referencia' => ['required', 'unique:productos'],
            'producto_precio' => 'required',
            'producto_peso' => 'required',
            'producto_categoria' => 'required',
            'producto_stock' => 'required',
        ]);

        $guardar = new Producto();
        $guardar->producto_nombre = $request->producto_nombre;
        $guardar->producto_referencia = $request->producto_referencia;
        $guardar->producto_precio = $request->producto_precio;
        $guardar->producto_peso = $request->producto_peso;
        $guardar->producto_categoria = $request->producto_categoria;
        $guardar->producto_stock = $request->producto_stock;
        if ($guardar->save()) {
            return back()->with(['mensaje' => 'Producto registrado Con Exito', 'tipo' => 'success']);
        } else {
            return back()->with(['mensaje' => 'Error al registrar el producto', 'tipo' => 'danger']);
        }
    }

    //metodo para editar el producto
    public function editGuardar(Request $request)
    {
        $productos = Producto::where('productos.id', $request->id)
            ->first();
            $productos->producto_nombre = $request->producto_nombre;
            $productos->producto_referencia = $request->producto_referencia;
            $productos->producto_precio = $request->producto_precio;
            $productos->producto_peso = $request->producto_peso;
            $productos->producto_categoria = $request->producto_categoria;
            $productos->producto_stock = $request->producto_stock;
        if ($productos->update()) {
            $productos = Producto::all();

            return view('productos.index', [
                'productos' => $productos,
            ]);
        }
    }

    //metodo para buscar el producto y enviar a vista editar
    public function editProducto($id)
    {
        $productos = Producto::where('productos.id', $id)
            ->first();

        return view('productos.edit', [
            'data' => $productos,
        ]);
    }

    //metodo para eliminar productos
    public function eliminar(Producto $producto)
    {
        $producto->delete();

        $productos = Producto::all();

        return view('productos.index', [
            'productos' => $productos,
        ]);
    }
}
