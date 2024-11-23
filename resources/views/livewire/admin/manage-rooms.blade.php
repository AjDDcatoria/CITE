<div>
    <div class="flex items-center gap-3 mb-4">
        <div class="lg:tooltip !tooltip-right" data-tip="Add room">
            <button class="btn btn-neutral btn-sm rounded" onclick="create_room_modal.showModal()">
                CITE +
            </button>
        </div>
    </div>
    <div id="room-grid">
        @foreach ($rooms as $room)
            <div class="card-item">
                <div class="card-header">
                    <div>Room</div>
                    <div class="icon bg-gray-300">
                        <i class='bx bxs-home text-gray-600' ></i>
                    </div>
                </div>
                <div class="content">
                    <h2>{{ $room->room }}</h2>
                </div>
                <div class="footer">
                    @if ($room->used)
                        <i class='bx bxs-circle text-xs text-green-500'></i>
                        <div class="avatar flex items-center gap-2">
                            <div class="w-6 rounded-full">
                            <img
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                alt="Tailwind-CSS-Avatar-component" />
                            </div>
                            <span class="!text-gray-500 text-xs !font-bold">Aj DDcatoria</span>
                        </div>
                    @else
                        <i class='bx bx-circle text-xs text-gray-400'></i>
                        <span>unused</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <dialog id="create_room_modal" class="modal">
        <div class="modal-box flex flex-col gap-4">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                    ✕
                </button>
            </form>
            <h3 class="text-lg font-bold">Create Room</h3>
            <div>
                <label class="input input-bordered flex items-center gap-2">
                    Room
                    <input type="number" class="grow" wire:model='room_number' name="room_number" placeholder="Number" />
                </label>
            </div>
            <div>
                <form method="dialog" class="float-right">
                  <button class="btn btn-error rounded">Cancel</button>
                  <button class="btn btn-success rounded" wire:click='createRoom'>Create</button>
                </form>
            </div>
        </div>
    </dialog>
</div>


