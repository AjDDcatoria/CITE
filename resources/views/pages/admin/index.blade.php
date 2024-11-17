<x-layouts.app>
    <div class="h-dvh flex">
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
                    <x-nav-item :route="'admin.new.users'" icon='bx-user-plus'>
                        New users
                    </x-nav-item>
                    <x-nav-item :route="'admin.manage.rooms'" icon='bx-home'>
                        Mange rooms
                    </x-nav-item>
                </ul>
            </x-nav-list>
            <div class="py-3 px-2">
                <button class="btn btn-neutral rounded-md w-full btn-sm">
                    Logout
                </button>
            </div>
        </aside>
        <div class="flex-1 bg-gray-100 flex flex-col">
            <header class="bg-white h-14 flex items-center px-5"> Header </header>
            @yield('content')
        </div>
    </div>
</x-layouts.app>
