@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-gray-700 focus:border-indigo-800 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-white']) !!}>
