@props([
    'action',
    'method' => 'POST'
])

<form
    action="{{ $action }}"
    method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}"
    class="space-y-6">

    @csrf

    @if(in_array(strtoupper($method), ['PUT','PATCH','DELETE']))
        @method($method)
    @endif

    {{ $slot }}

</form>