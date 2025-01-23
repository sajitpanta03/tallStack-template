@props(['type' => 'flat'])

@php
    $typeClasses = match ($type) {
        'stripe' => 'odd:bg-white dark:odd:bg-zinc-900 even:bg-zinc-100 dark:even:bg-zinc-950',
        'flat' => 'bg-white dark:bg-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-950',
        default => $type,
    };
@endphp

<tr {{ $attributes->merge([
    'class' => $typeClasses,
]) }}>
    {{ $slot }}
</tr>
