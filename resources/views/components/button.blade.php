@props(['color' => 'gray'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex justify-center px-4 py-2 bg-orange-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-600 active:bg-orange-600 focus:outline-none focus:border-orange-500 focus:ring focus:ring-orange-300 disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</button>
