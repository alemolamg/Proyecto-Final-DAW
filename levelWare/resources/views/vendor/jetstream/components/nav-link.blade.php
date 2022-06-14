@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-700 text-lg font-medium leading-5 text-indigo-100 focus:outline-none focus:border-white-700 transition' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-white-500 hover:text-green-200 hover:border-green-700 focus:outline-none focus:text-green-200 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
