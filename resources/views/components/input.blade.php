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
    'disabled' => false,
])



<label for="{{ $forLabel }}" class="{{ $labelClass }}">{{ $labelText }}</label>

<input type="{{ $inputType }}" name="{{ $name }}" id="{{ $id }}" class="{{ $inputClass }}"
    placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $disabled ? 'disabled' : '' }}>
