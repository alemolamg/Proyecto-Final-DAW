<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn inline-block px-3 py-2 bg-green-700 text-white font-bold font-medium text-md rounded-lg hover:bg-indigo-600 hover:shadow-lg focus:bg-indigo-700 focus:outline-none focus:ring-0 active:bg-indigo-600 transition duration-150 ease-in-out flex items-center']) }}>
    {{ $slot }}
</button>
