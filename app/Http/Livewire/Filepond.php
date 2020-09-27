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

    }

    public function render()
    {
        return view('livewire.filepond');
    }
}
