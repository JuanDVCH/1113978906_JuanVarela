@props([
    'name',
    'value',
    'label'
])

<label class="flex items-center gap-3 cursor-pointer">

    <input
        type="radio"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ $attributes }}>

    <span>

        {{ $label }}

    </span>

</label>