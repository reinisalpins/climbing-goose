@props([
    'name',
    'label' => null,
    'class' => null,
    'type' => 'text',
    'placeholder' => null,
    'value' => null,
    'containerClass' => null
])

<div class="flex flex-col {{$containerClass}}">
    @if($label)
        <label class="text-sm" for="{{ $name }}">
            {{ $label }}
        </label>
    @endif

    <input
        {{ $attributes->merge([
            'type' => $type,
            'id' => $name,
            'name' => $name,
            'placeholder' => $placeholder,
            'value' => old($name, $value),
            'class' => "border px-3 py-1.5 rounded-xl $class" . ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    />

    @error($name)
    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
