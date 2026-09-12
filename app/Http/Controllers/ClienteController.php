<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Listado de clientes con filtros
     */
    public function index(Request $request)
    {
        $query = Cliente::query();

        // 🔎 FILTRO: búsqueda general
        if ($request->filled('buscar')) {
            $query->where(function ($q) use ($request) {
                $q->where('nombre_cliente', 'like', "%{$request->buscar}%")
                  ->orWhere('cedula', 'like', "%{$request->buscar}%")
                  ->orWhere('nit', 'like', "%{$request->buscar}%")
                  ->orWhere('razon_social', 'like', "%{$request->buscar}%");
            });
        }

        // 🧾 FILTRO: tipo de cliente
        if ($request->filled('tipo_cliente')) {
            $query->where('tipo_cliente', $request->tipo_cliente);
        }

        // 📊 Resultado con paginación
        $clientes = $query
            ->orderBy('id_cliente', 'desc')
            ->paginate(10)
            ->withQueryString(); // mantiene filtros en paginación

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Guardar cliente
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo_cliente'   => 'required|in:Natural,Empresa',
            'nombre_cliente' => 'nullable|string|max:100',
            'cedula'         => 'nullable|string|max:20|unique:clientes,cedula',
            'razon_social'   => 'nullable|string|max:150',
            'nit'            => 'nullable|string|max:20|unique:clientes,nit',
        ]);

        Cliente::create($request->only([
            'tipo_cliente',
            'nombre_cliente',
            'cedula',
            'razon_social',
            'nit'
        ]));

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente registrado correctamente.');
    }

    /**
     * Mostrar cliente
     */
    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    /**
     * Actualizar cliente
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'tipo_cliente'   => 'required|in:Natural,Empresa',
            'nombre_cliente' => 'nullable|string|max:100',
            'cedula'         => 'nullable|string|max:20|unique:clientes,cedula,' . $cliente->id_cliente . ',id_cliente',
            'razon_social'   => 'nullable|string|max:150',
            'nit'            => 'nullable|string|max:20|unique:clientes,nit,' . $cliente->id_cliente . ',id_cliente',
        ]);

        $cliente->update($request->only([
            'tipo_cliente',
            'nombre_cliente',
            'cedula',
            'razon_social',
            'nit'
        ]));

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }
}