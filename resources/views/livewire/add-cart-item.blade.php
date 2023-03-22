<div x-data>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock: </span>{{$inStock}}
    </p>

    <div class="flex">
        <div class="mr-4">
            <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty <= 1"
            wire:loading.attr="disabled"
            wire:target="decrease"
            wire:click="decrease">
                -
            </x-jet-secondary-button>

            <span class="mx-2 text-gray-700">{{$qty}}</span>
            <x-jet-secondary-button
            disabled
            x-bind:disabled="$wire.qty == $wire.inStock"
            wire:loading.attr="disabled"
            wire:target="increase"
            wire:click="increase">
                +
            </x-jet-secondary-button>
        </div>

        <div class="flex-1">
            <x-button class="w-full">AGREGAR AL CARRITO DE COMPRAS</x-button>
        </div>
    </div>
</div>
