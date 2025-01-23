@props(['href', 'title'])
<a {{ $attributes->merge([
    'class' =>
        'text-lg font-medium hover:underline text-zinc-600 dark:text-zinc-400 hover:text-zinc-800 dark:hover:text-zinc-200 focus:underline focus:text-zinc-800 dark:focus:text-zinc-200 whitespace-nowrap',
    'href' => $href,
]) }}
    wire:navigate>
    {{ $title ?? $slot }}
</a>
<x-icon.slash class="shrink-0 w-5 h-5 mx-2 text-zinc-600 dark:text-zinc-400" />
