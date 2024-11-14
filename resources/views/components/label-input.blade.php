<label {{ $attributes->merge(['class' => 'form-control w-full']) }} >
    <div class="label">
      <span class="label-text font-semibold text-gray-500"> {{ $label }} </span>
    </div>

    {{ $slot }}

    @isset($error)
        <div class="label h-7">
            <span class="text-red-700 font-semibold"> {{ $error }} </span>
        </div>
    @endisset
</label>
