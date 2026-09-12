@extends('layouts.app')

@section('title', 'Clientes')

@section('content')

    <div class="space-y-6">

        {{-- Encabezado --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

            <div>

                <h1 class="text-3xl font-bold text-slate-800">
                    Clientes
                </h1>

                <p class="text-slate-500">
                    Gestión de clientes registrados.
                </p>
                <div>
                    <x-button variant="create" onclick="abrirModal('modal-create-cliente')">

                        + Nuevo Cliente

                    </x-button>
                </div>
            </div>
        </div>

        {{-- Filtros  --}}


        {{-- Tarjetas --}}
        @include('clientes.partials.cards')

        {{-- Modal Crear Cliente --}}
        @include('clientes.modals.create')
    </div>

    @include('clientes.modals.create')

@endsection
