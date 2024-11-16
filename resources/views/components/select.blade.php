<select {{ $attributes->merge(['class' => 'form-control select w-full']) }}>
    {{ $slot }}
    @isset($error)
        <div class="label h-7">
            <span class="text-red-700 font-semibold"> {{ $error }} </span>
        </div>
    @endisset
</select>
