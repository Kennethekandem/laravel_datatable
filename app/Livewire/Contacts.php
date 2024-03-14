<?php

namespace App\Livewire;

use Livewire\Component;

class Contacts extends Component
{

    public $contacts;

    public function mount($contacts)
    {
        $this->contacts = $contacts;
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
