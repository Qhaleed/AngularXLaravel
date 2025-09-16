@props(['link' => 'https://github.com/Qhaleed', 'label' => 'Github']);
<div>
 <a href="{{ $link }}" aria-label="{{ $label }}">
    <i class="fab fa-{{ $label }}">{{$label}}</i>
</a>
</div>
