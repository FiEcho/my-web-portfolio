@props([
    'url' => '',
    'urlClass' => '',
    'urlId' => '',
    'urlName' => '',
])

<a href="{{ $url }}" class="{{ $urlClass }}" id="{{ $urlId }}">{{ $urlName }}</a>
