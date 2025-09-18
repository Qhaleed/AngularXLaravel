@props(['link' => 'https://github.com/Qhaleed', 'label' => 'Github'])
@php


    $key = strtolower($label);

    $variantClasses = match($key) {
        'github'=> 'hover:text-black hover:bg-white rounded-4xl',
        'linkedin'=> 'hover:text-blue-900',
        'instagram'=> 'hover:text-pink-600',
         default => 'hover:text-white'

    };
    $baseClass = 'fab fa-' . $key . ' text-4xl transition duration-200 ';

    $realClass = trim($baseClass . ' ' . $variantClasses);

@endphp
<div>
 <a href="{{ $link }}" aria-label="{{ $label }}">
    <i
    {{ $attributes->merge(['class'=>$realClass]) }}
     ></i>
</a>
</div>
