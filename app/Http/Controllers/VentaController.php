<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Mostrar todas las ventas.
     */
    public function index()
    {
        $ventas = Venta::with(['cliente', 'detalleVentas'])
            ->orderBy('id_venta', 'desc')
            ->get();

        $clientes = Cliente::orderBy('nombre_cliente')->get();

        $productos = Producto::where('estado', 'Disponible')
            ->orderBy('nombre_producto')
            ->get();

        return view('ventas.index', compact(
            'ventas',
            'clientes',
            'productos'
        ));
    }

    /**
     * Registrar una nueva venta.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_cliente'      => 'required|exists:clientes,id_cliente',
            'subtotal_venta'  => 'required|numeric|min:0',
            'iva'             => 'required|numeric|min:0',
            'total_venta'     => 'required|numeric|min:0',
            'productos'       => 'required|array|min:1',
        ]);

        DB::transaction(function () use ($request) {

            // Crear la venta
            $venta = \App\Models\Venta::create([
                'id_cliente'      => $request->id_cliente,
                'subtotal_venta'  => $request->subtotal_venta,
                'iva'             => $request->iva,
                'total_venta'     => $request->total_venta,
                'fecha_venta'     => now(),
            ]);

            // Registrar detalle y actualizar inventario
            foreach ($request->productos as $item) {

                $producto = Producto::findOrFail($item['id_producto']);

                if ($producto->stock < $item['cantidad']) {

                    throw new \Exception(
                        "Stock insuficiente para {$producto->nombre_producto}"
                    );
                }

                // Guardar detalle
                DetalleVenta::create([

                    'id_venta'                => $venta->id_venta,
                    'id_producto'             => $producto->id_producto,
                    'nombre_producto'         => $producto->nombre_producto,
                    'cantidad_producto'       => $item['cantidad'],
                    'precio_producto'         => $item['precio'],
                    'subtotal_detalle_venta'  => $item['cantidad'] * $item['precio']

                ]);

                // Actualizar stock
                $producto->stock -= $item['cantidad'];

                // Actualizar estado
                $producto->estado = $producto->stock == 0
                    ? 'Agotado'
                    : 'Disponible';

                $producto->save();
            }
        });

        return redirect()
            ->route('ventas.index')
            ->with('success', 'Venta registrada correctamente.');
    }

    /**
     * Mostrar el detalle de una venta.
     */
    public function show(Venta $venta)
    {
        $venta->load(['cliente', 'detalleVentas']);

        return view('ventas.show', compact('venta'));
    }
}
