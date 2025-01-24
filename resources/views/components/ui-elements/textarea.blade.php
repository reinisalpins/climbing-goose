@props([
    'name',
    'label',
    'value' => null
])

<div class="flex flex-col">
    <label class="text-sm" for="{{ $name }}">
        {{ $label }}
    </label>

    <textarea
        {{ $attributes->merge([
            'id' => $name,
            'name' => $name,
            'class' => 'border px-3 py-1.5 rounded-xl max-h-[500px] min-h-[100px] ' . ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    >{{old($name, $value)}}</textarea>

    @error($name)
    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
