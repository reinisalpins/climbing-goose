@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null
])

<div class="flex flex-col">
    <label class="text-sm" for="{{ $name }}">
        {{ $label }}
    </label>

    <input
        {{ $attributes->merge([
            'type' => $type,
            'id' => $name,
            'name' => $name,
            'value' => old($name, $value),
            'class' => 'border px-3 py-1.5 rounded-xl ' . ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    />

    @error($name)
    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
