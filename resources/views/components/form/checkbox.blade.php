@props([
    'name',
    'label'
])

<label class="flex items-center gap-3 cursor-pointer">

    <input
        type="checkbox"
        name="{{ $name }}"
        {{ $attributes }}>

    <span class="text-slate-700">

        {{ $label }}

    </span>

</label>