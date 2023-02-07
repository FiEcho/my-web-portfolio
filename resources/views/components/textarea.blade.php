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
])



<div class="mb-3 ">
    <label for="{{ $forLabel }}" class="{{ $labelClass }}">{{ $labelText }}</label>

    <textarea name="{{ $name }}" id="{{ $id }}" cols="{{ $cols }}" rows="{{ $rows }}"
        class="{{ $textareaClass }}">{{ $text }}</textarea>
</div>
