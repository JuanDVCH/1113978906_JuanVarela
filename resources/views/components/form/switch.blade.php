@props([
    'name',
    'label'
])

<label class="flex items-center gap-3 cursor-pointer">

    <input
        type="checkbox"
        class="sr-only peer"
        name="{{ $name }}">

    <div class="w-11 h-6 bg-slate-300 rounded-full peer peer-checked:bg-cyan-600 relative transition">

        <span class="absolute top-0.5 left-0.5 bg-white w-5 h-5 rounded-full transition-all peer-checked:translate-x-5"></span>

    </div>

    <span>

        {{ $label }}

    </span>

</label>