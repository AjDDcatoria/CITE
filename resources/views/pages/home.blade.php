<x-layouts.app>
    <div class="h-dvh flex overflow-hidden">
        <aside class="h-full flex flex-col max-w-[15rem] w-full bg-black/100 text-gray-100">
            <div class="h-14 flex gap-2 items-center px-4 relative">
                <img src="{{ asset('image/NEMSU.png') }}" alt="" class="h-6 w-6">
                <h1>NEMSU</h1>
            </div>
            <x-nav-list class="mt-5">
                <ul class="w-full flex flex-col gap-2">
                    <x-nav-item :route="'home'" icon='bx-line-chart-down'>
                        Home
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
            <section id="manage-rooms" class="flex-1 p-5">
                <livewire:admin.manage-rooms />
            </section>
        </div>
    </div>
</x-layouts.app>
