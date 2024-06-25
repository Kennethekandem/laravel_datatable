<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Contacts extends Component
{

    /* public $contacts;

    public function mount($contacts)
    {
        $this->contacts = $contacts;
    } */

    public function render()
    {
        $c = Contact::all();
        return view('livewire.contacts', ['contacts' => $c]);
    }
}
