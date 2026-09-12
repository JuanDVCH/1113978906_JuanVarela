@extends('layouts.app')

@section('content')

<div class="space-y-6">

    <div class="flex justify-between items-center">

        <div>

            <h1 class="text-3xl font-bold text-slate-800">

                Productos

            </h1>

            <p class="text-slate-500">

                Gestión de productos del sistema.

            </p>

        </div>

        <x-button
            variant="create"
            onclick="abrirModal('modal-create-producto')">

            + Nuevo Producto

        </x-button>

    </div>

    @include('productos.partials.cards')

    @include('productos.modals.create')

</div>

@endsection