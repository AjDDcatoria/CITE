<?php

namespace App\Livewire\Admin;

use App\Models\Room;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ManageRooms extends Component
{
    #[Rule('numeric|required|min:100|max:999')]

    public Room $room_model;

    public function render(): View
    {
        return view('livewire.admin.manage-rooms',[
            'rooms' => Room::all()
        ]);
    }

    public function createRoom(): void
    {
        $this->validate();

        // Create room
        Room::create([
            'room' => $this->room_number
        ]);
    }
}