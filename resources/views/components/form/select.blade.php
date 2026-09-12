@props([
    'name',
    'id' => null,
    'label' => null,
    'required' => false,
    'disabled' => false,
])

@php
    $id = $id ?? $name;
@endphp

<div>

    @if($label)

        <x-form.label
            :for="$id"
            :required="$required">

            {{ $label }}

        </x-form.label>

    @endif

    <select

        id="{{ $id }}"
        name="{{ $name }}"

        @required($required)
        @disabled($disabled)

        {{ $attributes->merge([
            'class' => '
                w-full
                rounded-xl
                border
                border-slate-300
                px-4
                py-3
                focus:border-cyan-500
                focus:ring-2
                focus:ring-cyan-200
                disabled:bg-slate-100
                disabled:text-slate-500
                disabled:cursor-not-allowed
            '
        ]) }}>

        {{ $slot }}

    </select>

    <x-form.error :name="$name"/>

</div>