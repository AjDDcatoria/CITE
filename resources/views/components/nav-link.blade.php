<a href="{{ route($route) }}" {{ $attributes->merge(['class' => 'h-full w-full flex gap-2 items-center']) }}>
    <div class="{{ request()->routeIs($route) ? 'bg-neutral' : '' }} h-full w-8 flex items-center justify-center rounded-md">
        <i class='bx {{ $icon }} text-xl' style='color:#dad1d1'></i>
    </div>
    {{ $slot }}
</a>
