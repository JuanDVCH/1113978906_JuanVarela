@props([
    'name',
    'label'=>null,
    'rows'=>4
])

<div>

    @if($label)

        <x-form.label :for="$name">

            {{ $label }}

        </x-form.label>

    @endif

    <textarea

        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"

        {{ $attributes->merge([
            'class'=>'
            w-full
            rounded-xl
            border
            border-slate-300
            px-4
            py-3
            focus:border-cyan-500
            focus:ring-2
            focus:ring-cyan-200'
        ]) }}>{{ old($name) }}</textarea>

    <x-form.error :name="$name"/>

</div>