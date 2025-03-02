@props(['active', 'href' => null, 'title'])

@php
    $classes = $active ?? false ? 'flex items-center px-3 py-2 text-sm font-medium border rounded-md text-zinc-800 dark:text-zinc-300 bg-zinc-100 dark:bg-zinc-950 border-zinc-200 dark:border-zinc-800 focus:border-zinc-100 dark:focus:border-zinc-950' : 'flex items-center px-3 py-2 text-sm font-medium border border-transparent rounded-md text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-950 hover:text-zinc-800 dark:hover:text-zinc-300 hover:border-zinc-200 dark:hover:border-zinc-800 focus:bg-zinc-100 dark:focus:bg-zinc-950';
@endphp

<a {{ $attributes->merge([
    'href' => $href,
    'class' => $classes,
]) }}>
    @isset($icon)
        <div class="mr-2">
            {{ $icon }}
        </div>
    @endisset

    {{ $title ?? $slot }}
</a>
