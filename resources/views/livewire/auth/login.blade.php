<main class="h-dvh flex items-center justify-center text-gray-500 p-5 bg-gray-100">
    <div class="max-w-[30rem] w-full shadow-lg px-5 py-10 rounded-lg border bg-white">

        <div class="flex flex-col gap-5 items-center justify-end mb-10">
            <img src="{{ asset('image/NEMSU.png') }}" class="h-28" alt="NEMSU.png"/>
            <h2 class="text-2xl">Welcome back!</h2>
        </div>

        @if(session('error'))
            <div class="bg-red-400 p-2 rounded">
                <span class="text-red-700 font-semibold"> {{ session('error') }} </span>
            </div>
        @endif

        <form wire:submit.prevent="submit" class="flex flex-col">
            <x-label-input label="Email">
                <input
                    type="email"
                    wire:model="email"
                    name="email"
                    placeholder="Enter email address"
                    class="input input-bordered w-full rounded-md"
                    required
                />
                @error('email')
                    <x-slot:error> {{ $message }} </x-slot:error>
                @enderror
            </x-label-input>

            <x-label-input label="Password">
                <input
                    type="password"
                    wire:model="password"
                    placeholder="Enter password address"
                    class="input input-bordered w-full rounded-md"
                    required
                />
                @error('password')
                    <x-slot:error> {{ $message }} </x-slot:error>
                @enderror
            </x-label-input>

            <div class="flex justify-between text-sm my-5">
                <a href="#" class="link link-hover text-info font-semibold">Forgot your password?</a>
                <p>
                    Don't have an account?
                    <a href="{{ route('register') }}" class="link link-hover text-info font-semibold">Sign Up</a>
                </p>
            </div>

            <button type="submit" class="btn btn-primary rounded">
                LOGIN
            </button>
        </form>

    </div>
</main>
