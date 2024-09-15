@props(['brand'])

@php

    $classes = 'bg-white/20 m-2 rounded-xl bold hover:bg-white/50 transition-colors duration-300 px-2 py-1 text-xxs';

    echo '<a class="' . $classes . '" href="/brand/' . strtolower($brand->name) . '"> ' . $brand->name . '</a>';

@endphp