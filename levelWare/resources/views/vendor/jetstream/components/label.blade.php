@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium levelware text-white']) }}>
    {{ $value ?? $slot }}
</label>
