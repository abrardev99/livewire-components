<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Date extends Component
{
    public $birthday;
    public function updatedBirthday()
    {
        dd($this->birthday);
    }

    public function render()
    {
        return view('livewire.date');
    }
}
