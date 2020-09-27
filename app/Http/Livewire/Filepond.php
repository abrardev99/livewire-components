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

    public function save()
    {
        $this->dispatchBrowserEvent('alert', ['type' => 'warning',  'message' => 'Saved']);
    }

    public function render()
    {
        return view('livewire.filepond');
    }
}
