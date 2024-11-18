<x-layouts.app>
    <div class="h-dvh flex overflow-hidden">
        <aside class="h-full flex flex-col max-w-[15rem] w-full bg-black/100 text-gray-100">
            <div class="h-14 flex gap-2 items-center border-b border-gray-600 px-4 relative">
                <img src="{{ asset('image/NEMSU.png') }}" alt="" class="h-6 w-6">
                <h1>NEMSU</h1>
            </div>
            <x-nav-list class="mt-5">
                <ul class="w-full flex flex-col gap-2">
                    <x-nav-item :route="'admin.dashboard'" icon='bx-line-chart-down'>
                        Dashboard
                    </x-nav-item>
                    <x-nav-item :route="'admin.manage.users'" icon='bx-user-plus'>
                        Manage users
                    </x-nav-item>
                    <x-nav-item :route="'admin.manage.rooms'" icon='bx-home'>
                        Manage rooms
                    </x-nav-item>
                </ul>
            </x-nav-list>
            <div class="py-3 px-2">
                <livewire:auth.logout-btn/>
            </div>
        </aside>
        <div class="flex-1 flex flex-col">
            <header class="bg-white py-2 flex justify-between  items-center px-5 border-b border-gray-200">
                <div class="font-semibold text-xl">
                    Hello {{ $user->role }}!
                </div>
                <div class="flex items-center gap-2">
                    <label class="font-semibold">{{ $user->firstname }} {{ $user->lastname }}</label>
                    <div class="avatar">
                        <div class="w-10 rounded-full">
                          <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt=""/>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
        </div>
    </div>
</x-layouts.app>

@yield('scripts')
