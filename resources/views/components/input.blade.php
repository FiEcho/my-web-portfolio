@props([
    'inputType' => '',
    'name' => '',
    'inputClass' => '',
    'id' => '',
    'placeholder' => '',
    'labelClass' => '',
    'forLabel' => '',
    'labelText' => '',
    'value' => '',
    'url' => '',
    'urlName' => '',
    'urlClass' => '',
])



<label for="{{ $forLabel }}" class="{{ $labelClass }}">{{ $labelText }}</label>

<input type="{{ $inputType }}" name="{{ $name }}" id="{{ $id }}" class="{{ $inputClass }}"
    placeholder="{{ $placeholder }}" value="{{ $value }}">

<a href="{{ $url }}" class="{{ $urlClass }}">{{ $urlName }}</a>
