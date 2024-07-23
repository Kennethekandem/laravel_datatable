<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class Contacts extends Component
{
    use WithPagination;

    /* public $contacts;

    public function mount($contacts)
    {
        $this->contacts = $contacts;
    } */

    public function render()
    {
        $c = Contact::simplePaginate(10);
        return view('livewire.contacts', ['contacts' => $c]);
    }
}
