<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::orderBy('id_producto', 'desc')->get();

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo_producto' => 'required|unique:productos,codigo_producto',
            'nombre_producto' => 'required|string|max:255',
            'precio_producto' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Producto::create([
            'codigo_producto' => $request->codigo_producto,
            'nombre_producto' => $request->nombre_producto,
            'precio_producto' => $request->precio_producto,
            'stock' => $request->stock,
            'estado' => $request->stock > 0 ? 'Disponible' : 'Agotado',
        ]);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto registrado correctamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'precio_producto' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $producto->update([
            'precio_producto' => $request->precio_producto,
            'stock' => $request->stock,
            'estado' => $request->stock == 0 ? 'Agotado' : 'Disponible',
        ]);

        return redirect()
            ->route('productos.index')
            ->with('success', 'Producto actualizado correctamente.');
    }
    public function destroy(Producto $producto)
    {
        // No se utilizará eliminación física.
        return redirect()->route('productos.index');
    }
}
