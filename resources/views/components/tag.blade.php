@props(['size' => 'base'])

@php

    $classes = 'bg-white/20 m-2 rounded-xl bold hover:bg-white/50 transition-colors duration-300';

    if ($size == 'base')
    {
        $classes .= ' px-5 py-1 text-sm ';
    }
    else 
    {
        $classes .= ' px-2 py-1 text-xxs ';
    }
@endphp

<button class="{{ $classes }}">
    {{ $slot }}
</button>

