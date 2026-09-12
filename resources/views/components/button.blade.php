@props([
    'type' => 'button',
    'variant' => 'primary',
    'href' => null,
])

@php

$classes = match($variant) {

    'primary' => 'bg-cyan-600 hover:bg-cyan-700 text-white',

    'secondary' => 'bg-slate-600 hover:bg-slate-700 text-white',

    'success' => 'bg-emerald-600 hover:bg-emerald-700 text-white',

    'warning' => 'bg-amber-500 hover:bg-amber-600 text-white',

    'danger' => 'bg-red-600 hover:bg-red-700 text-white',

    'create' => 'bg-cyan-500 hover:bg-cyan-600 text-white',

    'neutral' => 'bg-gray-500 hover:bg-gray-600 text-white',

    default => 'bg-cyan-600 hover:bg-cyan-700 text-white'

};

$baseClasses = '
inline-flex
items-center
justify-center
gap-2
px-5
py-2.5
rounded-lg
font-medium
shadow-md
transition-all
duration-300
hover:shadow-lg
focus:outline-none
focus:ring-2
focus:ring-cyan-300
disabled:opacity-50
disabled:cursor-not-allowed
';

@endphp

@if($href)

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => "$baseClasses $classes"]) }}>

    {{ $slot }}

</a>

@else

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "$baseClasses $classes"]) }}>

    {{ $slot }}

</button>

@endif