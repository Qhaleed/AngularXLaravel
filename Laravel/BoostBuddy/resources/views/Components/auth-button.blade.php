 {{-- Props passed as attributes --}}
@props(['variant' => 'primary'])

@php

        $baseClasses = 'px-4 py-2 rounded-md transition duration-200 font-medium';

        // better way for if else
        $variantClasses = match($variant){
            'outline' => 'border border-white text-white hover:bg-white hover:text-gray-900',
            'primary' => 'bg-blue-900  text-white hover:bg-blue-700',
             default => 'bg-blue-600 text-white hover:bg-blue-700'

        };

        $classes = $baseClasses . ' ' . $variantClasses;

@endphp


    <button {{ $attributes-> merge(['class' => $classes]) }}>

        {{ $slot }}
    </button>

