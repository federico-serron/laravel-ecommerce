@props(['size' => '2xl', 'color' => 'gray'])

@php
    switch ($color) {
        case 'gray':
            $col = '#000000';
            break;
    
        case 'white':
            $col = '#FFFFFF';
            break;
    
        default:
            $col = '#374151';
            break;
    }
@endphp



<i class="fa fa-shopping-cart text-{{ $size }} cursor-pointer" style="color: {{ $col }}" ></i>