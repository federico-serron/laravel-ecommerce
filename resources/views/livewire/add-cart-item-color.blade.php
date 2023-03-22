<div x-data>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <p class="text-xl text-gray-700">Color: </p>

    <select wire:model="color_id" class="form-control w-full" >
        <option value="" selected disabled>Seleccionar un valor</option>
        @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
        @endforeach
    </select>

    <div class="flex mt-4">
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
            <x-button 
                class="w-full"
                x-bind:disabled="!$wire.inStock">
                AGREGAR AL CARRITO DE COMPRAS
            </x-button>
        </div>
    </div>

</div>
