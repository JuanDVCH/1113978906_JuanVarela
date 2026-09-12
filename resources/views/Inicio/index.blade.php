@extends('layouts.app')

@section('title','Inicio')

@section('content')

<div class="flex flex-col items-center justify-center text-center py-20">

    <h1 class="text-4xl font-bold text-slate-800 mb-4">
        Bienvenido/a al Sistema
    </h1>

    <p class="text-lg text-slate-600 max-w-2xl">
        Nos alegra tenerte aquí. Desde este panel podrás gestionar de manera eficiente la información, 
        operaciones y procesos del sistema de forma centralizada y segura.
    </p>

    <div class="mt-8">
        <span class="px-4 py-2 rounded-full bg-slate-100 text-slate-700 text-sm">
            Sistema de Gestión.
        </span>
    </div>

</div>

@endsection