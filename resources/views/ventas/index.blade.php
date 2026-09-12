@extends('layouts.app')

@section('title', 'Ventas')

@section('content')

    <div class="space-y-8">

        {{-- Encabezado --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <div>

                <h1 class="text-3xl font-bold text-slate-800">

                    Ventas

                </h1>

                <p class="text-slate-500 mt-2">

                    Administre las ventas registradas en el sistema.

                </p>

            </div>

            <x-button variant="create" onclick="abrirModal('modal-create-venta')">

                + Nueva Venta

            </x-button>

        </div>

        {{-- Tarjetas de ventas --}}
        @include('ventas.partials.cards')

    </div>

    {{-- Modal Registrar Venta --}}
    @include('ventas.modals.create')

@endsection
