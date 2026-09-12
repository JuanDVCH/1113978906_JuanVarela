@props([
    'for',
    'required' => false
])

<label
    for="{{ $for }}"
    class="block mb-2 text-sm font-semibold text-slate-700">

    {{ $slot }}

    @if($required)
        <span class="text-red-500">*</span>
    @endif

</label>