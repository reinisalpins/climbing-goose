@props([
    'name',
    'label' => null,
    'class' => null,
    'placeholder' => null,
    'value' => null
])

<div class="flex flex-col">
    @if($label)
        <label class="text-sm" for="{{ $name }}">
            {{ $label }}
        </label>
    @endif

    <textarea
        {{ $attributes->merge([
            'id' => $name,
            'name' => $name,
            'placeholder' => $placeholder,
            'class' => "border px-3 py-1.5 rounded-xl max-h-[500px] min-h-[150px] $class " . ($errors->has($name) ? 'border-red-500' : '')
        ]) }}
    >{{old($name, $value)}}</textarea>

    @error($name)
    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
    @enderror
</div>
