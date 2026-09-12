@props([
    'type' => 'text',
    'name',
    'id' => null,
    'label' => null,
    'placeholder' => '',
    'value' => '',
    'required' => false,
    'readonly' => false,
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

    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"

        @required($required)
        @readonly($readonly)
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
                outline-none
                transition
                disabled:bg-slate-100
                disabled:text-slate-500
                disabled:cursor-not-allowed
                readonly:bg-slate-50
            '
        ]) }}
    >

    <x-form.error :name="$name"/>

</div>