<?php

namespace App\Livewire\Admin;

use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ManageRooms extends Component
{
    #[Rule('numeric|required|min:100|max:999')]
    public $room_number;

    public function render(): View
    {
        return view('livewire.admin.manage-rooms',[
            'rooms' => Room::with('user')->get()
        ]);
    }

    public function createRoom(): void
    {
        $this->validate();

        Room::create([
            'room' => $this->room_number
        ]);
    }

    public function useRoom(string $roomId)
    {
        $room = Room::find($roomId);

        $userUsedRoom = Room::where('used',Auth::user()->id)->first();

        if($room->used && $room->used !== Auth::user()->id) {
            return;
        }

        if(!$userUsedRoom) {
            $room->update(['used' => Auth::user()->id]);
            return;
        }

        if($userUsedRoom->id == $roomId && $userUsedRoom->used == Auth::user()->id) {
            $room->update(['used' => null]);
            return;
        }
    }
}