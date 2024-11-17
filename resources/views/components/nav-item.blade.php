<li {{ $attributes->merge([
    'class' => (request()->routeIs($route) ? '' : 'hover:bg-neutral') . ' flex rounded-md overflow-hidden h-8 transition-all ease-in-out duration-200'
]) }}>
    <x-nav-link :route="$route" :icon="$icon">
        {{ $slot }}
    </x-nav-link>
</li>
