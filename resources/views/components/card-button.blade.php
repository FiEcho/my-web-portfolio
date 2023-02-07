@props([
    'buttonType' => '',
    'buttonClass' => '',
    'name' => '',
    'id' => '',
    'text' => '',
    'url' => '',
])

<button type="{{ $buttonType }}" class="{{ $buttonClass }}" name="{{ $name }}" id="{{ $id }}"
    onclick="window.location.href='{{ $url }}'">
    {{ $slot }}
    {{ $text }}</button>
