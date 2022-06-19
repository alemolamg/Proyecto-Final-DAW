<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-800 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-700 active:bg-red-700 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
