@props([
    'name',
    'label',
    'options' => [],
    'selected' => [],
    'multiple' => true
])

@php
@endphp
<div class="flex flex-col">
    <label class="text-sm" for="{{ $name }}">
        {{ $label }}
    </label>

    <select
        {{ $attributes->merge([
            'id' => $name,
            'name' => $multiple ? $name . '[]' : $name,
            'multiple' => $multiple,
            'class' => 'border rounded-xl ' . ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    >
        @foreach($options as $value => $label)
            <option
                class="p-2"
                value="{{ $value }}"
                {{ in_array($value, old($name, $selected)) ? 'selected' : '' }}
            >
                {{ $label }}
            </option>
        @endforeach
    </select>

    @error($name)
    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
