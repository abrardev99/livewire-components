<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Filepond extends Component
{
    use WithFileUploads;

    public $avatar;
    public $avatars;


    public function updatedAvatar()
    {

    }

    public function save($type)
    {
        $this->dispatchBrowserEvent('alert', ['type' => $type,  'message' => 'Saved']);
    }

    public function render()
    {
        return view('livewire.filepond');
    }
}
