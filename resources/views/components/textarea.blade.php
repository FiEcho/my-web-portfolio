@props([
    'name' => '',
    'id' => '',
    'text' => '',
    'cols' => '',
    'rows' => '',
    'textareaClass' => '',
    'labelClass' => '',
    'forLabel' => '',
    'labelText' => '',
    'disabled' => false,
])



<div class="mb-3 ">
    <label for="{{ $forLabel }}" class="{{ $labelClass }}">{{ $labelText }}</label>

    <textarea name="{{ $name }}" id="{{ $id }}" cols="{{ $cols }}" rows="{{ $rows }}"
        class="{{ $textareaClass }}" {{ $disabled ? 'disabled' : '' }}>{{ $text }}</textarea>
</div>
